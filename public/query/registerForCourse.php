<?php
include "../include/db.php";
include "../include/loginValidation.php";

$cid = $_POST['cid'];
$date = date("Y/m/d");
$get_id = "select id from users where email ='".$user."'";
$finl = mysqli_query($conn,$get_id);

if($finl)
{
    $ro =mysqli_fetch_row($finl);
    $uid = $ro[0];
    $sql1 = "insert into user_course values(null,'".$uid."','".$cid."',false,'".$date."')";
    $result1 = mysqli_query($conn,$sql1);
    if($result1) {
        echo $cid;
        header("location: ../parts.php?id=".$cid);
    }else {
        echo "course regitration error";
    }

}
else{
    echo "error";
}






