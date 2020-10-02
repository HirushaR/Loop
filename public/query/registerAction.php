<?php
include "../include/db.php";
session_start();

$email = mysqli_real_escape_string($conn,$_POST['email']);
$f_name = mysqli_real_escape_string($conn,$_POST['first_name']);
$l_name = mysqli_real_escape_string($conn,$_POST['last_name']);
$psw = mysqli_real_escape_string($conn,$_POST['password']);
$date = date("Y/m/d");

$sql = "INSERT INTO `users` (`first_name`,`last_name`, `email`, `password`, `created_date` ) VALUES ('".$f_name."','".$l_name."', '".$email."', '".md5($psw)."','".$date."')";
$result = mysqli_query($conn,$sql);

if($result) {

        $_SESSION['login_user'] = $email;
        header("location: ../home.php");
}else {

   echo "
    <script>alert('Registration failed!');
    window.history.back();
    </script>
   ";
}

