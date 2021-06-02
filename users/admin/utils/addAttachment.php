<?php
session_start();
include_once "../includes/config.php";
$title = mysqli_real_escape_string($conn, $_POST['title']);
$category = mysqli_real_escape_string($conn, $_POST['category']);
$location = mysqli_real_escape_string($conn, $_POST['location']);
$startdate = mysqli_real_escape_string($conn, $_POST['startdate']);
$description = mysqli_real_escape_string($conn, $_POST['description']);

if (!empty($title) && !empty($category) && !empty($location) && !empty($startdate) && !empty($description)) {
    $insert_query = mysqli_query($conn, "INSERT INTO tbl_attachments (title, category, location, startdate, description)
                                VALUES ('$title', '$category', '$location', '$startdate', '$description')");
    if ($insert_query) {
        echo "success";
    } else {
        echo "Something went wrong. Please try again!";
    }
} else {
    echo "All input fields are required!";
}

?>