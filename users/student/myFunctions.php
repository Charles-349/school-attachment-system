<?php
include "includes/config.php";

function numOfQuestionsAnswerd($test, $sid) {
    include "includes/config.php";
    $result = mysqli_query($conn, "SELECT * FROM tbl_responses where test = '$test' and student_id='$sid'");
    return mysqli_num_rows($result);
    
};

function testsDone($sid)
{
    include "includes/config.php";
    $result = mysqli_query($conn, "SELECT DISTINCT test FROM tbl_responses where student_id='$sid'");

    return mysqli_num_rows($result);
}

function calculateScore($test, $sid){
    include "includes/config.php";
    $score = 0;
    $result = mysqli_query($conn, "SELECT DISTINCT * FROM tbl_responses where test ='$test' and student_id='$sid'");

    while($row = mysqli_fetch_assoc($result)){
        $res = $row['response'];
        $quizno = $row['quizno'];

        $ansres = mysqli_query($conn, "SELECT DISTINCT * FROM tbl_answers where test ='$test' and quizno='$quizno'");
         while($ansrow = mysqli_fetch_assoc($ansres)){
             if($ansrow['correct']==1){
                 if($ansrow['answer'] == $res){
                     $score++;
                 }
             }
         }
    }
    return $score;
}

function getBestScored($sid){
    $hardwareScore = calculateScore("hardware", $sid);
    $softwareScore = calculateScore("software", $sid);
    $networkingScore = calculateScore("networking", $sid);

    if($hardwareScore > $softwareScore && $hardwareScore > $networkingScore){
        return "hardware";
    }else if($softwareScore > $hardwareScore && $softwareScore > $networkingScore){
        return "software";
    }else{
        return "networking";
    }
}

function getAttachmentDetails($sid){
    include "includes/config.php";
    $checkresult = mysqli_query($conn, "SELECT * FROM tbl_registered_attachments where studentid = '$sid'");
    $array = mysqli_fetch_assoc($checkresult);

    if(mysqli_num_rows($checkresult)>0){
            ?>
               <tr>
                    <th>Company Name</th>
                    <td><?php echo $array["companyname"] ?></td>
                </tr>
                <tr>
                    <th>Company Location</th>
                    <td><?php echo $array["companylocation"] ?></td>
                </tr>
                <tr>
                    <th>Company Address</th>
                    <td><?php echo $array["companyaddress"] ?></td>
                </tr>
                <tr>
                    <th>Company Contacts</th>
                    <td><?php echo $array["companycontact"] ?></td>
                </tr>
                <tr>
                    <th>Role</th>
                    <td><?php echo $array["role"] ?></td>
                </tr>
                <tr>
                    <th>Duration</th>
                    <td><?php echo $array["duration"] ?> weeks</td>
                </tr>
                <tr>
                    <th>Start Date</th>
                    <td><?php echo $array["startdate"] ?></td>
                </tr>
            <?php
    }else{
        echo "No Attachment Added";
    }

}