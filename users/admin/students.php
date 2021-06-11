<?php
include "functions_all.php";
include "includes/header.php";

$course = $_GET['course'];
$year = $_GET['year'];




?>
<section class="content row">
    <?php include "includes/sidebar.php"; ?>

    <div class="col col-sm-12 col-md-8 col-lg-10 main-content py-4 px-5">

        <form id="filterForm" action="#" method="post">
            <div class="row" style="align-items: center;">
                <div class="col col-12">
                    <h2 class="text-success">Filters</h2>
                </div>
                <div class="col col-1">
                    <select value="<?php echo $course ?>" id="courseInput" name="year">
                        <option value="all" selected=<?php if($course == ""){ echo "true";}else{echo "false";} ?>>All Courses</option>
                        <option value="BBIT" selected=<?php if($course == "BBIT"){ echo "true";}else{echo "false";} ?>>BBIT</option>
                        <option value="IT" selected="false">IT</option>
                    </select>
                </div>
                <div class="col col-1">
                    <select value="<?php echo $year ?>" id="yearInput" name="year">
                        <option value="all">All Years</option>
                        <option value="1">1st Year</option>
                        <option value="2">2nd Year</option>
                        <option value="3">3rd Year</option>
                        <option value="4">4th Year</option>
                    </select>
                </div>
                <div class="col col-1">
                    <input id="filterButton" type="submit" class="form-control" value="Filter">
                </div>
            </div>
        </form>
        <div class="row mt-3">
            <div class="col">
                <h2 class="text-success">All Students</h2>
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php getAllStudents(); ?>
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

        if(course === "all" && year === "all"){
            location.href = "students.php";
        }else if(course === "all" && year != "all"){
            location.href = `students.php?year=${year}`;
        }else if(course != "all" && year == "all"){
            location.href = `students.php?course=${course}`;
        }else{
            location.href = `students.php?course=${course}&year=${year}`;
        }
    };
</script>
</body>

</html>