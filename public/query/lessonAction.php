<?php
include "user_lessons.php";
//onclick=\"window . location . href = 'lessons.php?parts_id=' + $pid + '&lessons_id=' + 1\"

include "../include/db.php";
include "../include/loginValidation.php";

$pid = $_POST['parts_id'];
$date = date("Y/m/d");
$get_id = "select id from users where email ='".$user."'";
$finl = mysqli_query($conn,$get_id);

if ($finl)
{
    $ro =mysqli_fetch_row($finl);
    $uid = $ro[0];
    $sql2 = "select course_id from parts where id ='".$pid."' ";
    $re = mysqli_query($conn,$sql2);
    $row = mysqli_fetch_array($re);
    $cid = $row[0];

    $sql1 = "insert into user_parts values(null,'".$uid."','".$pid."','".$cid."',false,'".$date."')";
    $result1 = mysqli_query($conn,$sql1);
    if($result1) {
        // get the first lesson of parts
        $get_first_lesson = "select id from lessons where part_id='".$pid."' limit 1";
        $run = mysqli_query($conn,$get_first_lesson);
        if ($run)
        {
            $lid = mysqli_num_rows($run);
            user_lessons_insert($uid,$lid,$pid);

        }else{
            echo "lesson id not found";
        }

    }else {
        echo "parts regitration error";
    }
}
else{
    echo "no user found";
}