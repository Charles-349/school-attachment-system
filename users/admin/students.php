<?php
include "functions_all.php";
include "includes/header.php";

if(isset($_GET['course'])){
    $course = $_GET['course'];
}else{
    $course = "all";
}
if(isset($_GET['year'])){
    $year = $_GET['year'];
}else{
    $year = "all";
}


?>
<section class="content row">
    <?php include "includes/sidebar.php"; ?>

    <div class="col col-sm-12 col-md-8 col-lg-10 main-content py-4 px-5">
        <form class="mt-2 row" id="filterForm">
            <select name="" id="yearInput" class="form-control col-3 col-lg-2">
                <option value="all">Select Year</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <select name="" id="courseInput" class="form-control col-3 col-lg-2">
                <option value="all">Select Course</option>
                <option value="IT">IT</option>
                <option value="BBIT">BBIT</option>
            </select>
            <button id="filterButton" class="btn btn-outline-success col col-2 col-lg-2">Apply</button>
        </form>
        <div class="row mt-3">
            <div class="col">
                <h2 class="text-success">All Students</h2>
                <div class="d-flex justify-content-end">
                    <a href="pdfs/students.php" target="_blank" class="m-3 btn btn-warning"><i class="fa fa-pdf" aria-hidden="true"></i>Export PDF</a> 
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First name</th>
                            <th scope="col">Last name</th>
                            <th scope="col">Registration Number</th>
                            <th scope="col">Course</th>
                            <th scope="col">Year</th>
                            <th scope="col">Password Reset</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($course =="all" && $year == "all") {
                            getAllStudents();
                        }else{
                            getFilteredStudents($year, $course);
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<script>
    const filterForm = document.querySelector("#filterForm");
    const courseInput = document.querySelector("#courseInput");
    const yearInput = document.querySelector("#yearInput");
    const filterButton = document.querySelector("#filterButton");

    filterForm.onsubmit = (e) => {
        e.preventDefault();
    };

    filterButton.onclick = () => {
        const course = courseInput.value;
        const year = yearInput.value;

        if (course === "all" && year !== "all") {
            location.href = `students.php?year=${year}`;
        } else if (course != "all" && year == "all") {
            location.href = `students.php?course=${course}`;
        } else {
            location.href = `students.php?course=${course}&year=${year}`;
        }
    };
</script>
</body>

</html>