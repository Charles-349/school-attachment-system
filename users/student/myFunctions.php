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

function calculateScore($test, $sid){
    include "includes/config.php";
    $score = 0;
    $result = mysqli_query($conn, "SELECT DISTINCT * FROM tbl_responses where test ='$test' and student_id='$sid'");

    while($row = mysqli_fetch_assoc($result)){
        $res = $row['response'];
        $quizno = $row['quizno'];

        $ansres = mysqli_query($conn, "SELECT DISTINCT * FROM tbl_answers where test ='$test' and quizno='$quizno'");
         while($ansrow = mysqli_fetch_assoc($ansres)){
             if($ansrow['correct']==1){
                 if($ansrow['answer'] == $res){
                     $score++;
                 }
             }
         }
    }
    return $score;
}

function getBestScored($sid){
    $hardwareScore = calculateScore("hardware", $sid);
    $softwareScore = calculateScore("software", $sid);
    $networkingScore = calculateScore("networking", $sid);

    if($hardwareScore > $softwareScore && $hardwareScore > $networkingScore){
        return $hardwareScore;
    }else if($softwareScore > $hardwareScore && $softwareScore > $networkingScore){
        return $softwareScore;
    }else{
        return $networkingScore;
    }
}