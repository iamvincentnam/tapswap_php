<?php
$timeout_duration = 30;

if (!isset($_SESSION['player_name']) || (isset($_SESSION['time']) && (time() - $_SESSION['time'] > $timeout_duration))) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}
 ?>