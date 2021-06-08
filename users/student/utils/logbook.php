<?php
session_start();
include_once "../includes/config.php";

$week = $_GET['week'];
$sid = $_SESSION['studentid'];

$mondayjob = mysqli_real_escape_string($conn, $_POST['mondayjob']);
$mondayskill = mysqli_real_escape_string($conn, $_POST['mondayskill']);
$tuesdayjob = mysqli_real_escape_string($conn, $_POST['tuesdayjob']);
$tuesdayskill = mysqli_real_escape_string($conn, $_POST['tuesdayskill']);
$wednesdayjob = mysqli_real_escape_string($conn, $_POST['wednesdayjob']);
$wednesdayskill = mysqli_real_escape_string($conn, $_POST['wednesdayskill']);
$thursdayjob = mysqli_real_escape_string($conn, $_POST['thursdayjob']);
$thursdayskill = mysqli_real_escape_string($conn, $_POST['thursdayskill']);
$fridayjob = mysqli_real_escape_string($conn, $_POST['fridayjob']);
$fridayskill = mysqli_real_escape_string($conn, $_POST['fridayskill']);

// $sql = "UPDATE `tbl_logbook` SET `uniqueid`='[value-2]',`week`='[value-3]',`mondayjob`='[value-4]',`mondayskill`='[value-5]',`tuesdayjob`='[value-6]',`tuesdayskill`='[value-7]',`wednesdayjob`='[value-8]',`wednesdayskill`='[value-9]',`thursdayjob`='[value-10]',`thursdayskill`='[value-11]',`fridayjob`='[value-12]',`fridayskill`='[value-13]',`studentid`='[value-14]' WHERE 1";


$ran_id = rand(time(), 100000000);
$insert_query = mysqli_query($conn, "INSERT INTO tbl_logbook (`uniqueid`,`week`,`mondayjob`, `mondayskill`, `tuesdayjob`, `tuesdayskill`, `wednesdayjob`, `wednesdayskill`, `thursdayjob`, `thursdayskill`, `fridayjob`, `fridayskill`, `studentid`)
                                VALUES ('{$ran_id}', '{$week}','{$mondayjob}', '{$mondayskill}', '{$tuesdayjob}', '{$tuesdayskill}', '{$wednesdayjob}', '{$wednesdayskill}', '{$thursdayjob}', '{$thursdayskill}', '{$fridayjob}', '{$fridayskill}', '{$sid}')");
if ($insert_query) {
    echo "success";
} else {
    echo "Something went wrong. Please try again!";
}
