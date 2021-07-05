<?php
session_start();
include "includes/config.php";
$csupid  = $_SESSION['csupid'];

$supres = $conn->query("SELECT * FROM company_supervisors where uniqueid = '$csupid'");
$suparray = mysqli_fetch_assoc($supres);

$supemail = $suparray['email'];

$studcountres = $conn->query("SELECT * FROM students where csupervisor = '$supemail'");

?>

<?php include "includes/header.php"; ?>
<section class="content row">
    <?php include "includes/sidebar.php"; ?>

    <div class="col col-sm-12 col-md-8 col-lg-10 main-content">
        <h4 class="text-success my-5 ml-2">Main Dashboard</h4>
        <hr>
        <div class="row m-2">
            <div class="card col col-sm-6 col-md-6 col-lg-3 m-1">
                <div class="card-body">
                    <h5 class="text-center">Assigned Students</h5>
                    <h1 class="text-center text-primary"><?php echo mysqli_num_rows($studcountres); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
</body>

</html>