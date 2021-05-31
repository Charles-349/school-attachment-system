<?php
if (!isset($_GET['loginas'])) {
    header("location: choose.html");
}
$who = $_GET['loginas'];

?>

<?php include "includes/header.php" ?>
        <div class="form login">
            <?php
            if($who == "companysupervisor"){
                include "components/company_sup_login_form.php";
            }else if($who == "schoolsupervisor"){
                include "components/school_sup_login_form.php";
            }else{
                include "components/student_login_form.php";

            }

            ?>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/q.js"></script>
</body>

</html>