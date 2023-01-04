<?php
include('db/sessions.php');
include('db/db.php');
include('functions.php');
if(isset($_SESSION['email']) || isset($_SESSION['pg']))
{
    echo "<script> window.location = 'index.php';</script>";
}
if (!isset($_POST['login'])) {
    include('theme/signin.php');
}
else {
    
    $email =  $_POST['email'];
    $pass =  $_POST['pass'];
    if(isset($_POST['rem'])){
        $rem = 1;
    }
    else {
        $rem = 0;
    }

    if(user_signin($email,$pass))
    {
        $_SESSION['email'] = $email;
        echo "<script> window.location = 'index.php';</script>";
    } else {
        echo "information did not match.";
        echo '<a href="index.php">click here</a>to continue.';
    }

    
}
?>