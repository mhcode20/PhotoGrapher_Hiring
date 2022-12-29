<?php
include('db/sessions.php');
include('db/db.php');
include('functions.php');

if (!isset($_GET['submit'])) {
    include('theme/payment.php');
}
else{
    $pg_email = $_GET['pg_email'];
    $u_email = $_GET['u_email'];
    $status = $_GET['status'];

    $db->query("INSERT INTO `order`(`id`, `user`, `photographer`, `status`) VALUES (null,'$u_email','$pg_email','$status')");
    echo 'order complited <a href="index.php">click here</a> to continue.';
}

?>