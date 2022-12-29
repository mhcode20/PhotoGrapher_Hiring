<?php
include('db/sessions.php');
include('db/db.php');
include('functions.php');
if(isset($_SESSION['email']))
{
    echo "<script> window.location = 'index.php';</script>";
}
if (!isset($_POST['login'])) {
    include('theme/signin.php');
}
else {
    
    $email =  $_POST['email'];
    $pass =  $_POST['pass'];

    if(user_signin($email,$pass))
    {
        $_SESSION['email'] = $email;
        echo "<script> window.location = 'index.php';</script>";
    } else {
        echo "information did not match.";
    }

    
}
?>