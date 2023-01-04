<?php
include('db/sessions.php');
include('db/db.php');
include('functions.php');

if (isset($_SESSION['email'])) {

    $email = $_SESSION['email'];
    $res = $db->query("select * from `users` where email='$email'");
    $row = $res->fetch_assoc();
    include('theme/u_profile.php');
}
else if(isset($_SESSION['pg']))
{
    $email = $_SESSION['pg'];
    $res = $db->query("select * from `photographers` where email='$email'");
    $row = $res->fetch_assoc();
    include('theme/pg_profile.php');
}
?>