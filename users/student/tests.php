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
        <h4 class="text-success my-5 ml-2">All Tests</h4>
        <div class="row ml-2">
            <div class="card m-2" style="width: 18rem;">
                <img class="card-img-top" src="images/hardware.jpeg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card m-2" style="width: 18rem;">
                <img class="card-img-top" src="images/software.png" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card m-2" style="width: 18rem;">
                <img class="card-img-top" src="images/networking.jpeg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</section>
</body>

</html>