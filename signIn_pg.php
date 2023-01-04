<?php
include('db/sessions.php');
include('db/db.php');
include('functions.php');
if(isset($_SESSION['email']) || isset($_SESSION['pg']))
{
    echo "<script> window.location = 'index.php';</script>";
}
if (!isset($_POST['submit'])) {
    include('theme/pg_login.php');
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

    if(pg_signin($email,$pass))
    {
        $_SESSION['pg'] = $email;
        echo "<script> window.location = 'index.php';</script>";
    } else {
        echo "information did not match.";
        echo '<a href="index.php">click here</a>to continue.';
    }

    
}
?>