<?php

function getNumOfStudents(){
    include "includes/config.php";
    $result = mysqli_query($conn, "SELECT * from students");

    return mysqli_num_rows($result);
}

function getNumOfAttachments(){
    include "includes/config.php";
    $result = mysqli_query($conn, "SELECT * from tbl_attachments");

    return mysqli_num_rows($result);
}

function getNumOfSchoolSupervisors(){
    include "includes/config.php";
    $result = mysqli_query($conn, "SELECT * from school_supervisors");

    return mysqli_num_rows($result);
}

function getNumOfCompanySupervisors(){
    include "includes/config.php";
    $result = mysqli_query($conn, "SELECT * from company_supervisors");

    return mysqli_num_rows($result);
}

function getAllAdmins(){
    include "includes/config.php";
    $result = mysqli_query($conn, "SELECT * from admins");

    if(mysqli_num_rows($result)>0){
        $count = 0;
        while($row = mysqli_fetch_assoc($result)){
            $count ++;
            ?>
               <tr>
                    <th><?php echo $count ?></th>
                    <td><?php echo $row['firstname'] ?></td>
                    <td><?php echo $row['lastname'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                </tr>
            <?php
        }
    }else{
        echo "No admin";
    }

}

function getAllAttachments(){
    include "includes/config.php";
    $result = mysqli_query($conn, "SELECT * from tbl_attachments");

    if(mysqli_num_rows($result)>0){
        $count = 0;
        while($row = mysqli_fetch_assoc($result)){
            $count ++;
            ?>
               <tr>
                    <th><?php echo $count ?></th>
                    <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['category'] ?></td>
                    <td><?php echo $row['location'] ?></td>
                    <td><?php echo $row['startdate'] ?></td>
                </tr>
            <?php
        }
    }else{
        echo "No admin";
    }

}

function getAllCompanySupervisors(){
    include "includes/config.php";
    $result = mysqli_query($conn, "SELECT * from company_supervisors");

    if(mysqli_num_rows($result)>0){
        $count = 0;
        while($row = mysqli_fetch_assoc($result)){
            $count ++;
            ?>
               <tr>
                    <th><?php echo $count ?></th>
                    <td><?php echo $row['firstname'] ?></td>
                    <td><?php echo $row['lastname'] ?></td>
                    <td><?php echo $row['company'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                </tr>
            <?php
        }
    }else{
        echo "<tr><td colspan='5'>No Supervisor</td></tr>";
    }

}

function getAllSchoolSupervisors(){
    include "includes/config.php";
    $result = mysqli_query($conn, "SELECT * from school_supervisors");

    if(mysqli_num_rows($result)>0){
        $count = 0;
        while($row = mysqli_fetch_assoc($result)){
            $count ++;
            ?>
               <tr>
                    <th><?php echo $count ?></th>
                    <td><?php echo $row['firstname'] ?></td>
                    <td><?php echo $row['lastname'] ?></td>
                    <td><?php echo $row['department'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                </tr>
            <?php
        }
    }else{
        echo "<tr><td colspan='5'>No Supervisor</td></tr>";
    }

}

?>