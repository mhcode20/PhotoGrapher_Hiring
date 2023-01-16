<?php
include_once('db/db.php');


function photographer_signup($name,$email,$address,$phone,$type,$pass,$img,$price,$cv,$vr)
{
    global $db;
    $sql = "INSERT INTO `photographers`(`id`, `name`, `email`, `address`, `phone`, `type`, `pass`,`img`,`price`,`vr`,`cv`) VALUES (null,'$name','$email','$address','$phone','$type','$pass','$img','$price','$vr','$cv')";
    $e_c = $db->query("select * from photographers where email='$email'");
    if(mysqli_num_rows($e_c)>0){
        echo 'email already exists.';
    } else {
        if (mysqli_query($db, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);

        }
    }
}


function imageUp($file)
{
    $bytes = random_bytes(16);
    $random_string = bin2hex($bytes);

    $img = $random_string.$file['name'];
    $temp_name = $file['tmp_name'];

    $location = 'upload/';

    if(move_uploaded_file($temp_name, $location.$img)){
        echo 'File uploaded successfully<br>';
    }
    return $img;
}

function demoImgUp($file,$pg)
{
    $fname = imageUp($file);
    global $db;
    $db->query("INSERT INTO `demoimg`(`id`, `pg`, `img`) VALUES (null,'$pg','$fname')");
    echo "demo image Added <br>";
}

function user_signup($name,$email,$phone,$pass)
{
    global $db;
    $sql = "INSERT INTO `users`(`id`, `name`, `email`, `phone`, `pass`) VALUES (null,'$name','$email','$phone','$pass')";


    $e_c = $db->query("select * from users where email='$email'");
    if(mysqli_num_rows($e_c)>0){
        echo 'email already exists.';
    } else {
        if (mysqli_query($db, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);

        }
    }
}

function user_signin($email,$pass){
    global $db;
    $res = $db->query("select * from users where email='$email' and pass='$pass'");
    if(mysqli_num_rows($res)>0)
    {
        return true;
    }
    else {
        return false;
    }
}

function admin_signin($email,$pass){
    global $db;
    $res = $db->query("select * from admin where email='$email' and pass='$pass'");
    if(mysqli_num_rows($res)>0)
    {
        return true;
    }
    else {
        return false;
    }
}



function pg_signin($email,$pass){
    global $db;
    $res = $db->query("SELECT * FROM `photographers` WHERE email='$email' and pass='$pass'");
    if(mysqli_num_rows($res)>0)
    {
        return true;
    }
    else {
        return false;
    }
}
?>