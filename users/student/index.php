<?php
session_start();
if (!isset($_SESSION['studentid'])) {
    header("location: login.php");
}
?>

<?php include "includes/header.php"; ?>
<section class="content row">
    <?php include "includes/sidebar.php"; ?>

    <div class="col col-sm-12 col-md-8 col-lg-9 main-content">
        <h4 class="text-success my-5 ml-2">Main Dashboard</h4>
        <div class="row ml-2">
            <div class="card col col-sm-6 col-md-6 col-lg-3 m-1">
                <div class="card-body">
                    <h5>Applied Attachments</h5>
                    <h1 class="text-center text-primary">0</h1>
                </div>
            </div>
            <div class="card col col-sm-6 col-md-6 col-lg-3 m-1">
                <div class="card-body">
                    <h5>Applied Attachments</h5>
                    <h1 class="text-center text-primary">0</h1>
                </div>
            </div>
        </div>
        <div class="row m-2">
            <div class="col">
                <h2 class="text-success">0 Test Done</h2>
                <h3>Average score N/A</h3>
                <a href="#" class="btn btn-primary">Go To Tests</a>
            </div>
        </div>
    </div>
</section>
</body>

</html>