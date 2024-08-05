
<?php
session_start();
$timeout_duration = 30;

if (isset($_SESSION['player_name']) && (isset($_SESSION['time']) && (time() - $_SESSION['time'] > $timeout_duration))) {
    session_unset();
    session_destroy();
}
require_once('header.php');


$dsn ="mysql:host=localhost;port=3306;dbname=tapswap;user=root;charset=utf8mb4";
$pdo = new PDO($dsn);

function fetch_Data_from_Database($query, $fetchmethod = 'fetchAll') {
    global $pdo;
    $statement = $pdo->prepare($query);
    $statement->execute();
    if($fetchmethod === 'fetchAll'){
        $users = $statement->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $users = $statement->fetch(PDO::FETCH_ASSOC);
    }
    return $users;
}

$username_error_login=$password_error_login=$login_success_or_error_message='';

if(isset($_POST['submit'])){
    $username = filter_input(INPUT_POST, 'login_Username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'login_password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if(empty($username)){
        $username_error_login ="<div class='error_message'> Username is required</div>";
    }

    if(empty($password)){
        $password_error_login="<div class='error_message'>Password is required</div>";
    }
    if(empty($username_error_login) && empty($password_error_login)){
        $query = "SELECT * FROM user_table WHERE username = '$username' AND password = '$password'";
        $user= fetch_Data_from_Database($query, 'fetch');

        if($user){
            $_SESSION['player_name'] = $user['username'];
            $_SESSION['id'] = $user['id'];
            $_SESSION['time'] = time();
            header("Location: welcome.php");
            exit();
         }
         else{
            $login_success_or_error_message="<div class='login_success_or_error_message'> Password or Username is Incorrect</div>";

         }
         
    
}

}
?>

<?php
function insert_data_into_tapswap_users_table($sql_insertion) {
    global $pdo;
    $statement = $pdo->prepare($sql_insertion);
    return $statement->execute();
}

$username = $password = $email = $insertion_message = '';
$username_error = $email_error = $password_error = '';

if (isset($_POST['signup'])) {
    // Username check
    if (empty($_POST['username'])) {
        $username_error = "<div class='error_message'>Username is required</div>";
    } else {
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // Email check
    if (empty($_POST['email_address'])) {
        $email_error = "<div class='error_message'>Email is required</div>";
    } else {
        $email = filter_input(INPUT_POST, 'email_address', FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "<div class='error_message'>Invalid email format</div>";
        }
    }

    // Password check
    if (empty($_POST['password'])) {
        $password_error = "<div class='error_message'>Password is required</div>";
    } elseif (strlen($_POST['password']) < 4 || strlen($_POST['password']) > 8) {
        $password_error = "<div class='error_message'>Password must be between 4 & 8 characters</div>";
    } else {
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (empty($password_error) && empty($username_error) && empty($email_error)) {
        $sql_insertion = "INSERT INTO user_table (password, username, email) VALUES ('$password', '$username', '$email')";
        if (insert_data_into_tapswap_users_table($sql_insertion)) {
            $insertion_message = "<div class='login_success_or_error_message' style='color:green !important'>Sign-Up is Successful</div>";
           
            $_SESSION['player_name'] = $username;
            $_SESSION['time'] = time();
            echo "<script>
            setTimeout(function() {
                window.location.href = 'welcome.php';
            }, 2000);
            </script>";
            // header("Location: welcome.php");
            // exit();
        } else {
            $insertion_message = "<div class='login_success_or_error_message'>Sign-Up is NOT Successful</div>";
        }
    }
}
?>
