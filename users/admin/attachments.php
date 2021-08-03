
<?php 

include "functions_all.php";
include "includes/header.php"; 

?>
<section class="content row">
    <?php include "includes/sidebar.php"; ?>

    <div class="col col-sm-12 col-md-8 col-lg-10 main-content">
        <h4 class="text-success my-5 ml-2">All Attachments</h4>
        <form class="form-inline d-flex justify-content-end" method="post" action="generate_pdf.php">
            <button type="submit" id="pdf" name="generate_pdf" class="m-3 mx-5 btn btn-warning"><i class="fa fa-pdf"" aria-hidden="true"></i>
        Export PDF</button> 
        </form>
        <div class="row ml-2">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Location</th>
                            <th scope="col">Start Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php getAllAttachments();?>
                    </tbody>
                </table>
        </div>
    </div>
</section>
</body>

</html>