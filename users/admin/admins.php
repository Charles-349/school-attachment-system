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
        <h4 class="text-success my-5 ml-2">Admins</h4>
        <hr>
        <div class="row my-2">
            <div class="col">
                <h2 class="text-success">Add Admin</h2>
                <form>
                    <div class="row">
                        <div class="form-group col-12 col-sm-12 col-md-6">
                            <label>First name</label>
                            <input type="text" class="form-control" placeholder="Enter first name">
                        </div>
                        <div class="form-group col-12 col-sm-12 col-md-6">
                            <label>Last name</label>
                            <input type="text" class="form-control" placeholder="Enter last name">
                        </div>
                        <div class="form-group col-12 col-sm-12 col-md-6">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Enter email">
                        </div>
                        <div class="form-group col-12 col-sm-12 col-md-6">
                            <label>Password</label>
                            <input type="text" class="form-control" placeholder="Enter password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
        <br>
        <hr>
        <div class="row m-2 mt-5">
            <div class="col">
                <h2 class="text-success">All Admin</h2>
                <h3>Average score N/A</h3>
                <a href="tests.php" class="btn btn-primary">Go To Tests</a>
            </div>
        </div>
    </div>
</section>
</body>

</html>