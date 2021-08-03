<?php
include "functions_all.php";
include "includes/header.php";


?>
<section class="content row">
    <?php include "includes/sidebar.php"; ?>

    <div class="col col-sm-12 col-md-8 col-lg-10 main-content py-4 px-5">
        <div class="row mt-3">
            <?php if(!isset($_GET["studentid"])): ?>
            <div class="col">
                <h2 class="text-success">Attached Students</h2>
                <form class="form-inline d-flex justify-content-end" method="post" action="generate_pdf.php">
                <button type="submit" id="pdf" name="generate_pdf" class="m-3 btn btn-warning"><i class="fa fa-pdf"" aria-hidden="true"></i>
                Export PDF</button> 
                </form>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Reg No</th>
                            <th scope="col">Course</th>
                            <th scope="col">School Supervisor</th>
                            <th scope="col">Company Supervisor</th>
                            <th scope="col">Company</th>
                            <th scope="col">Results</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            getAttachedStudents();
                        ?>
                    </tbody>
                </table>
            </div>
            <?php else: ?>
                <div class="col">
                    <h2>Student Attachment Performance</h2>
                    <table class="table table-hover col col-12 col-md-6">
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>School Supervisor Assessment</td>
                                <td>23</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Company Supervisor Assessment</td>
                                <td colspan="2">34</td>
                            </tr>
                            <tr>
                                <th colspan="2">Total</th>
                                <td colspan="2">345</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            <?php endif ?>
        </div>
    </div>
</section>

<script>
</script>
</body>

</html>