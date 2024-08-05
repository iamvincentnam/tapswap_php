
<?php
$page_title = "Login Page";
require_once('access/login_script.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap');

        :root {
            --max-width: 1200px;
            --text-light: #dfdcb9;
            --extra-light: #faf5ff;
            --ultramarine2: hsl(220, 28%, 28%);
            --yellow: #fffc40;
            --olive-green: #202e32;
            --olive-green-light: #85937a;
            --amber: #f2c43d;
            --deep-gold: #ebb512;
            --ultramarine: #36244f;
            --silver: rgb(118, 118, 118);
            --grey-color: rgba(135, 134, 134, 0.348);
        }

        body {
            background-color: var(--text-light);
            font-family: 'Open Sans', sans-serif;
            color: var(--olive-green);
            margin: 0;
            padding: 0;
            
        }

        * {
            box-sizing: border-box;
        }
        .tab_box{
    width:100%;
    display: flex;
    position: relative;
    justify-content: space-evenly;
    align-items:center;
    padding-bottom: 4px;
    border-bottom: .5px solid rgba(192, 192, 192, 0.141);

}

.logInPageSection_container .tab_box{
    width:100%;
    display: flex;
    position: relative;
    justify-content: space-evenly;
    /* background-color: var(--amber); */
    align-items:center;
    padding-bottom: 4px;
    border-bottom: 5px solid rgba(192, 192, 192, 0.141);

}

.logInPageSection_container .tab_box .tab_btn{
    font-size: 18px;
    font-weight: 600;
    color: #919191;
    text-align: center;
    border: none;
    background-color:transparent;
    padding: 10px 18px;
    cursor: pointer;
    box-shadow:2px 4px 8px rgba(0, 0, 0, 0.323);
    outline: none;
    border-radius: 5px;
    transition: ease-in .2s all;
}
.logInPageSection_container .tab_box .tab_btn:hover{
    color: var(--text-light);
    background-color: var(--olive-green-light);
}
.logInPageSection_container .line{
background-color: var(--amber);
position: absolute;
top: 45px;
left: 100px;
width: 50px;
height: 4px;
border-radius: 10px;
transition: all ease-in .3s;
}
        .logInPageSection_container {
            min-height: 100vh;
            max-width: var(--max-width);
            margin: 1rem auto;
            padding: 1rem;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 4rem;
            align-items: center;
         
        }

        .form_div{
            height: 500px;
            box-shadow:2px 4px 8px rgba(0, 0, 0, 0.323);
            display: flex;
            flex-direction: column;
            padding:0 1rem;
            margin: 0;
            justify-content:space-evenly;

        }
        .form {
          box-shadow:2px 4px 8px rgba(0, 0, 0, 0.323);
            margin: 0 auto;
            height: 100%;
            width: 100%;
            user-select: none;
            flex-direction: column;
            padding:0  1rem;
            justify-content: space-evenly;
            display: none;
            animation: moving .5s ease-in;
            
        }
        .form.active{
            display: flex;
        }

        .form h1 {
            text-decoration: underline;
            text-align: center;
            text-transform: capitalize;
            color: var(--ultramarine);
            margin:0 ;
            padding: 0;
            font-family: "Playfair Display", serif;
  font-optical-sizing: auto;

        }

      

        .form label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            font-size: 0.8rem;
            color: var(--olive-green);
            padding: 5px 10px;
            border-radius: 10px;
        }

        .input input {
            padding: 0 20px;
            height: 40px;
            border-radius: 5px;
            width: 100%;
            border: none;
            font-size: 1rem;
            box-shadow: 2px 4px 4px rgba(0, 0, 0, 0.323);
            outline: none;
            background: none;
        }


        .check {
            font-size: .9rem;
            font-weight: 600;
            text-transform: capitalize;
        }
        .button_div {
            align-self: center;
        }

        .logInPageSection_container   button {
            font-size: 1.1rem;
            align-self: center;
            font-weight: 600;
            letter-spacing: 2px;
            padding: 0.8rem 1.3rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: var(--amber);
            transition: 0.3s;
            text-transform:uppercase;
            box-shadow: 2px 4px 8px rgba(0, 0, 0, 0.323);
        }

        .logInPageSection_container    button:hover {
            background-color: var(--ultramarine);
        }

        .logInPageSection_container   button:hover a {
            color: var(--amber);
        }

        .logInPageSection_container   button a {
            color: var(--ultramarine);
            text-decoration: none;
        }
.terms{
    text-transform: capitalize;
}
        .terms,.click_here{
            color: #a70101e7;
            font-weight: bold;
            cursor: pointer;
        }
        .click_here{font-size: 1rem;}
        .click_here:hover{text-decoration: underline;}
.you_dont_have_account{text-align: center;}
        .tapswap_hero {
            display: grid;
            place-items: center;
        }
        /* #tapswap_icon{ border:none;margin: 0; padding: 0;} */
       
        .tapswap_hero img {
            width: min(20rem, 90%);
            height: 400px;
            transform: rotate(30deg);
            animation: rotating_hero_image 50s linear infinite;
        }

        @media screen and (max-width: 768px) {
            .logInPageSection_container {
                margin: 1rem auto;
                padding: 1rem 1.2rem;
                text-align: center;
                grid-template-columns: 1fr;
            }

            button {
                font-size: 0.5rem;
                letter-spacing: 0;
                padding: 0.8rem;
                text-transform: lowercase !important;
            }

            .tapswap_hero {
                display: none;
            }
            .form label{display: none;}
        }
       
        @keyframes moving {
            from{transform:translate(-10px); opacity:0}
            to{transform: translateX(0);opacity: 1;}
            
        }
        @keyframes rotating_hero_image {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

.error_message{
    color: #a80000; 
    border:none;
    padding: .3rem .5rem;
    text-align: center;
    font-family: sans-serif;
    font-weight: 800;
    border-radius: 10px;
    font-size: 12px;
    width:auto;
margin: 1rem auto !important;
}

.login_success_or_error_message{
    text-align: center;
    font-family: sans-serif;
    font-weight: 600;
    font-size: 10px;
    border-radius: 10px;
    padding: .3rem .5rem;
    font-size: 14px;
    color: #a80000; 
    display: inline;
    margin: 0 auto;


}

    </style>
</head>
<body>
    <section class="logInPageSection_container">
        <div class="content">
            
            <div class="form_div">
                <form class="form" action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" id="signup_form" method="POST">
                    <h1>Sign Up</h1>
                    <?= $insertion_message ?>
                    <div class="input">
                    <label for="signUpUsername">UserName</label>
                        <input type="text" id="signUpUsername" name="username" placeholder="UserName" autocomplete="off">
                        <?= $username_error ?>
                        <!-- <p>username must be alphanumeric and must contain 5-8 characters.</p> -->
                    </div>

                    <div class="input">
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="email" autocomplete="off" name="email_address">
                        <?= $email_error; ?>
                        <!-- <p>Email must be a valid address.</p> -->
                    </div>

                    <div class="input">
                        <label for="signUpPassword">Password</label>
                        <input type="password" id="signUpPassword" placeholder="B/w 4 & 6 characters" name="password">
                        <?= $password_error; ?>
                        <!-- <p>Password must be alphanumeric and must contain 6-10 characters.</p> -->
                    </div>

                    <div class="check">
                        <input type="checkbox" required id="check" checked> 
                        <span class="intro">By creating an account, you agree to the </span>
                        <span id="terms_condition" class="terms">Terms and Conditions.</span>
                       
                        <p class="you_dont_have_account">you already have an account? <span class="click_here">Login here</span></p>
                    </div>

          
                    <button id="SignUp" type="submit" name="signup">
    Complete
</button> 
                </form>


                <!--sign in form begins here-->
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form" id="login_form">
                
                   
                        <h1>Sign In</h1>
                        <?=$login_success_or_error_message ?>

                    <div class="input">
                        <label for="loginUsername">UserName</label>
                        <input type="text" id="loginUsername" name="login_Username" placeholder="UserName" autocomplete="off">
                        <?= $username_error_login ?>
                        
                    </div>


                    <div class="input">
                        <label for="logInPassword">Password</label>
                        <input type="password" id="logInPassword" name="login_password">
                       
                         <?= $password_error_login ?>
                    </div>

                    <div class="check">
                        <p class="you_dont_have_account">you don't have an account yet? <span class="click_here">click here</span></p>
                       
                    </div>
          
                        <button id="Signin" name="submit">
                            Login
                        </button>
                        <div class="check">
                          
                           
                        </div>

                </form>
            </div>
        </div>
        <div class="tapswap_hero">
            <img src="asset/bot_image.png" alt="tap_swap_hero_img">
        </div>
    </section>
<?php require_once('footer.php') ?>
    <script>
        // const tabs = document.querySelectorAll('.click_here');
        const allForms= document.querySelectorAll('.form');
        const clickHereElements=document.querySelectorAll('.click_here');
        const signUpForm =document.querySelector('#signup_form');
        const loginForm =document.querySelector('#login_form');

      
function showsignUpForm(){
    signUpForm.classList.add('active')
    loginForm.classList.remove('active')
}
function showLoginForm(){
    signUpForm.classList.remove('active')
    loginForm.classList.add('active')
}

       clickHereElements.forEach((clickHere,index)=>{
     clickHere.addEventListener('click',(e)=>{
        e.preventDefault();
        if(e.target.textContent.trim()==='Login here'){
            showLoginForm();
        }else{showsignUpForm()}

     })
     showsignUpForm()
        })
      
        <?php
$error_exists = !empty($username_error_login) || !empty($password_error_login) || !empty($login_success_or_error_message);
?>
const errorExists = <?php echo json_encode($error_exists); ?>;
if (errorExists) {
        showLoginForm();
    } else {
        showsignUpForm();
    }   

    </script>
</body>
</html>
