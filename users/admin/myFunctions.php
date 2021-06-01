<?php
include "includes/config.php";

function numOfQuestionsAnswerd($test, $sid) {
    include "includes/config.php";
    $result = mysqli_query($conn, "SELECT * FROM tbl_responses where test = '$test' and student_id='$sid'");
    return mysqli_num_rows($result);
    
};

function testsDone($sid)
{
    include "includes/config.php";
    $result = mysqli_query($conn, "SELECT DISTINCT test FROM tbl_responses where student_id='$sid'");

    return mysqli_num_rows($result);
}
