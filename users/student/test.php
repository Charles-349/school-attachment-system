<?php
session_start();
include "includes/config.php";
if (!isset($_SESSION['studentid'])) {
    header("location: login.php");
}
if (!isset($_GET['quiz'])) {
    echo "<script> alert('No question specifies.') </script>";
    header("location: tests.php");
}

$test = $_GET['test'];
$quiz = $_GET['quiz'];
$next = $quiz < 10 ? $quiz + 1 : $quiz;

$quizresult = mysqli_query($conn, "select * from tbl_questions where test = '$test' and quizno = '$quiz'");

if (mysqli_num_rows($quizresult) < 1) {
    echo "<script> alert('No question available.') </script>";
    header("location: starttest.php?test=$test");
}
$quizarray = mysqli_fetch_assoc($quizresult);

$answerresult = mysqli_query($conn, "select * from tbl_answers where test = '$test' and quizno = '$quiz'");

?>


<?php include "includes/header.php"; ?>
<section class="content row">
    <?php include "includes/sidebar.php"; ?>

    <div class="col col-sm-12 col-md-8 col-lg-9 main-content">
        <h4 style="text-transform: uppercase;" class="text-success my-5 ml-2">Tests - <?php echo $test; ?></h4>
        <div class="row ml-2">
            <div class="card m-2" style="width: 50rem;">
                <div class="card-header">
                    <h2>QUESTION <?php echo $quiz ?> of 10 </h2>
                </div>
                <div class="card-body">
                    <h5 style="color: #000;"> Que <?php echo $quiz ?>: <?php echo $quizarray['question'] ?>. </h5>
                    <form id="question_answer" action="#" method="POST" enctype="multipart/form-data">
                        <div class="form-input m-2 mx-4">
                            <input type="hidden" value="<?php echo $quiz ?>" name="quizno" />
                            <input type="hidden" value="<?php echo $test ?>" name="test" />
                            <?php while ($row = mysqli_fetch_assoc($answerresult)) : ?>
                                <input name="answer" type="radio" value="<?php echo $row['answer'] ?>" class="mr-2"> <?php echo $row['answer'] ?><br>
                            <?php endwhile ?>
                        </div>
                        <button id="nextBtn" type="submit" class="mt-2 btn btn-outline-success btn-lg">Next</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const form = document.querySelector("#question_answer"),
        nextBtn = form.querySelector("#nextBtn");

    // href="test.php?test=<?php echo $test ?>&quiz=<?php echo $next ?>"

    form.onsubmit = (e) => {
        e.preventDefault();
    };

    nextBtn.onclick = () => {
        const qn = parseInt(document.location.search.split("quiz=")[1]);
        let next = qn < 10 ? qn + 1 : qn;
        const test = document.location.search.split("test=")[1].split("&")[0];

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "utils/test.php", true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    if (data === "success") {
                        location.href = `test.php?test=${test}&quiz=${qn+1}`;
                    } else if (data === "answered") {
                        alert("Already answered this question")
                        location.href = `test.php?test=${test}&quiz=${next}`;
                    } else {
                        alert(data);
                    }
                }
            }
        };
        let formData = new FormData(form);
        xhr.send(formData);
    };
</script>
</body>

</html>