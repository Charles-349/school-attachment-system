<?php
session_start();
if (!isset($_SESSION['studentid'])) {
    header("location: login.php");
}
if (!isset($_GET['test'])) {
    header("location: tests.php");
}

$test = $_GET['test'];

?>

<?php include "includes/header.php"; ?>
<section class="content row">
    <?php include "includes/sidebar.php"; ?>

    <div class="col col-sm-12 col-md-8 col-lg-10 main-content">
        <h4 style="text-transform: uppercase;" class="text-success my-5 ml-2">Tests - <?php echo $test; ?></h4>
        <div class="row ml-2">
            <div class="card m-2" style="width: 38rem;">
               <div class="card-header"><h2>Welcome to The Test - Start Now </h2></div>
                <div class="card-body d-flex flex-column justify-content-center">
                    <h4>Start Test</h4>
                    <p>This is a multiple choice test to test your <?php echo $test ?> knowledge</p>
                    <p>N/B: once you submit your answers or click next you cannot redo the test</p>
                    <h4>Number of questions <strong>10</strong></h4>
                    <h4 class="my-2">Number of attempts <strong>1</strong></h4>
                    <a href="test.php?test=<?php echo $test ?>&quiz=1" class="mt-5 btn btn-outline-success btn-lg">Start Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
</body>

</html>