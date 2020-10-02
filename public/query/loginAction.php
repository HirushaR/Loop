<?php
include "../include/db.php";
session_start();
    // username and password sent from form

    $log_email = mysqli_real_escape_string($conn,$_POST['loginemail']);
    $log_password = mysqli_real_escape_string($conn,$_POST['loginpassword']);

    $sql = "SELECT * FROM users WHERE email = '".$log_email."' and password = '".md5($log_password)."'";
    $result = mysqli_query($conn,$sql);
  //  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);
    if($count == 1) {

        $_SESSION['login_user'] = $log_email;
        header("location: ../home.php");
    }else {
         echo "
         <script>alert('Your Login Name or Password is invalid');
    window.history.back();
    </script>
         ";
    }

