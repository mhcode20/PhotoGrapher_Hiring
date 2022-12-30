<?php
include('db/sessions.php');
include('db/db.php');
include('functions.php');

$email = $_GET['email'];
$res = $db->query("select * from `photographers` where email='$email'");
$row = $res->fetch_assoc();
include('theme/pg_profile.php');

?>