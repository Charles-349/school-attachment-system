<?php
session_start();
if (!isset($_SESSION['studentid'])) {
    header("location: login.php");
}
$sid  = $_SESSION['studentid'];

include "myFunctions.php";
?>

<?php include "includes/header.php"; ?>
<section class="content row">
    <?php include "includes/sidebar.php"; ?>

    <div class="col col-sm-12 col-md-8 col-lg-9 main-content">
        <h4 class="text-success my-5 ml-2">Apply for Attachment</h4>
        <div class="row ml-2">
            <p>Based of the tests done, we recommend you to apply for <strong><?php echo getBestScored($sid) ?></strong> related attachment</p>
        </div>
        <div class="row m-2">
        <div class="col col-12">
                <h4>Recommended Attachments</h4>
                <hr>
                <br>
            </div>
            <div class="col col-12">
                <h4>Other Attachments</h4>
                <hr>
                <br>
            </div>
        </div>
    </div>
</section>
</body>

</html>