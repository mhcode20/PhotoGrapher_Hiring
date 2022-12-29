<?php
include_once('db/sessions.php');
include('db/db.php');
include('functions.php');
if(isset($_SESSION['email']))
{
    echo "<script> window.location = 'index.php';</script>";
}
if (!isset($_POST['Submit'])) {
    include('theme/CreateAccount.php');
}
else {
    $name =  $_POST['name'];
    $email =  $_POST['email'];
    $pass =  $_POST['pass'];
    $repass =  $_POST['repass'];
    $phone =  $_POST['phone'];



    if($repass==$pass) user_signup($name, $email, $phone, $pass);
    else
        echo "password did not match.";
}
?>