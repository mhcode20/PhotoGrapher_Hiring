<?php
include('db/db.php');


function photographer_signup($name,$email,$address,$phone,$type,$pass,$img,$price)
{
    global $db;
    $sql = "INSERT INTO `photographers`(`id`, `name`, `email`, `address`, `phone`, `type`, `pass`,`img`,`price`) VALUES (null,'$name','$email','$address','$phone','$type','$pass','$img','$price')";
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

?>