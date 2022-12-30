<?php
include('db/sessions.php');
include('db/db.php');
include('functions.php');

$email = $_SESSION['email'];
$res = $db->query("select * from `users` where email='$email'");
$row = $res->fetch_assoc();
include('theme/u_profile.php');

?>