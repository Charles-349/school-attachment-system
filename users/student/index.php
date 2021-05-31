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
        <h4>Main</h4>
    </div>
</section>
</body>

</html>