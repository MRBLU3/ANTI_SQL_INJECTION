<?php

include "conn.php";

$Username = $_POST['Username'];
$Password = $_POST['Password'];

    // Anti Sql Injection
    $Username = stripcslashes($Username);
    $Username = mysqli_real_escape_string($conn, $Username);
    $Password = stripcslashes($Password);
    $Password = mysqli_real_escape_string($conn, $Password); 

    $query = mysqli_query($conn, "SELECT * FROM mysql_injection WHERE `username` = '$Username' AND `password` = '$Password'");
    $count = mysqli_num_rows($query);

    if($count > 0) {
        echo "welcome $Username";
    }else{
        echo "Wrong Username or Password";
    }
?>
