<?php
include "includes/config.php";
$csupid = $_GET['id'];
$csupemail = $_GET['email'];


$query = "DELETE FROM `company_supervisors` WHERE uniqueid = '$csupid'";
if (mysqli_query($conn, $query)) {
    ?>
        <script>
            alert("Supervisor Deleted Successfully");
        </script>
    <?php
    header("location: companysupervisors.php");
    } else {
        ?>
        <script>
            alert("Failed to delete Supervisor. Try again later");
        </script>
    <?php
    header("location: companysupervisors.php");
    }


?>