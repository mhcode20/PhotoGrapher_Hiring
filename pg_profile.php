<?php
include('db/sessions.php');
include('db/db.php');
include('functions.php');

$email = $_GET['email'];
$res = $db->query("select * from `photographers` where email='$email'");
$rate_res = $db->query("select AVG(rating) as avg from `ratings` where pg_email='$email'");
$rn = $db->query("select * from `ratings` where pg_email='$email'");
$rate_num = mysqli_num_rows($rn);
$rating = $rate_res->fetch_assoc();
$row = $res->fetch_assoc();

if(isset($_GET['submit']))
{
    $rate = $_GET['rate'];
    $pe = $_GET['email'];
    $ue = $_SESSION['email'];
    $db->query("INSERT INTO `ratings`(`id`, `pg_email`, `u_email`, `rating`) VALUES (null,'$pe','$ue','$rate')");
    echo '<script>alert("Rating successful.");</script>';
}
include('theme/pg_profile.php');

?>