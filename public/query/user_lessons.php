<?php
include "../include/db.php";

function user_lessons_insert($uid, $lid, $pid)
{
    global $conn;
    $date = date("Y/m/d");
    $insert_lessons_users = "insert into user_lessons values(null,'".$uid."','".$lid."','".$pid."',false,'".$date."')";
    $inser = mysqli_query($conn, $insert_lessons_users);
    if($inser)
    {
        header("location: ../lessons.php?parts_id=".$pid.'&lessons_id='.$lid);
    }else{
        echo "error";
    }
}

