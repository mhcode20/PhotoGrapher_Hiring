<?php
    $db = mysqli_connect('localhost','root','','pk_db');

    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>