<?php

include "../include/db.php";
//session_start();
include "user_lessons.php";
include "../include/loginValidation.php";

$pid = $_POST['parts_id'];
$lid = $_POST['lesson_id'];
$date = date("Y/m/d");

$get_id = "select id from users where email ='".$user."'";
$finl = mysqli_query($conn,$get_id);

if($_POST['next_lesson']!= "")
{
    $nxt =$_POST['next_lesson'];
    if($finl)
    {
        $uid = mysqli_num_rows($finl);
        $update = "UPDATE user_lessons SET is_finished=true WHERE user_id='".$uid."' and lessons_id='".$lid."'";
        $resuld = mysqli_query($conn,$update);
        if($resuld){
            user_lessons_insert($uid,$nxt,$pid);
        }
        else{
            echo "didnt finished";
        }

    }else{
        echo "no user found";
    }

}
else{
    $ro =mysqli_fetch_row($finl);
    $uid = $ro[0];
    $update = "UPDATE user_lessons SET is_finished=true WHERE user_id='" . $uid . "' and lessons_id='" . $lid . "'";
    $resuld = mysqli_query($conn, $update);
    if ($resuld) {
        $update_parts = "UPDATE user_parts SET is_finished=TRUE WHERE user_id ='" . $uid . "' and part_id='" . $pid ."'";
        $run = mysqli_query($conn, $update_parts);


        if ($run) {
            $courses_id = "SELECT course_id FROM parts WHERE id = '".$pid."'";
            $qury = mysqli_query($conn,$courses_id);
            $row = mysqli_fetch_array($qury);
            $cid = $row[0];
            is_course_finished($uid,$cid);
            header('location:../parts.php?id='.$cid);

        } else {
            echo "user part didint updated";
        }

    } else {
        echo "user lessons didint updated";
    }
}


function is_course_finished($uid, $cid)
{

    global $conn;
    $tot_part =0;
    $tot_finished_parts=0;

    $finl = $uid;
    if($finl)
    {

        $get_parts = "select count(id) as tot from parts where course_id = '".$cid."'";
        $result = mysqli_query($conn,$get_parts);
        while ($row = mysqli_fetch_assoc($result))
        {
            $tot_part = $tot_part + $row['tot'];
            //echo $tot_part;
        }

        $is_fin ="select count(id) as totle from user_parts where is_finished = 1 and cid ='".$cid."' ";
        $res = mysqli_query($conn, $is_fin);
        while ($row2 = mysqli_fetch_assoc($res))
        {
            $tot_finished_parts = $tot_finished_parts + $row2['totle'];
            //echo $tot_finished_parts;
        }

        if ($tot_part == $tot_finished_parts)
        {
            $update = "UPDATE user_course SET is_finished=true WHERE user_id='".$uid."' and 	course_id='".$cid."'";
            $resul = mysqli_query($conn,$update);
        }else{
            echo "tot ".$tot_part."<br>";
            echo "tot finished".$tot_finished_parts;
        }



    }else{
        echo "no user found";
    }
}

