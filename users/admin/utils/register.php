<?php
    session_start();
    include_once "../includes/config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $regno = mysqli_real_escape_string($conn, $_POST['regno']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    if(!empty($fname) && !empty($lname) && !empty($regno) && !empty($password)){
        $passlen = number_format(strlen($password));
        if($passlen >= 8){
            $sql = mysqli_query($conn, "SELECT * FROM students WHERE regno = '{$regno}'");
            if(mysqli_num_rows($sql) > 0){
                echo "Account already registered!";
            }else{
                $ran_id = rand(time(), 100000000);
                $encrypt_pass = md5($password);
                $insert_query = mysqli_query($conn, "INSERT INTO students (uniqueid, fname, lname, regno, password)
                                VALUES ('{$ran_id}', '{$fname}', '{$lname}', '{$regno}', '{$encrypt_pass}')");
                if($insert_query){
                    $select_sql2 = mysqli_query($conn, "SELECT * FROM students WHERE regno = '{$regno}'");
                    if(mysqli_num_rows($select_sql2) > 0){
                        $result = mysqli_fetch_assoc($select_sql2);
                        $_SESSION['studentid'] = $result['uniqueid'];
                        echo "success";
                    }else{
                        echo "This email address not Exist!";
                    }
                }else{
                    echo "Something went wrong. Please try again!";
                }
            }
        }else{
            echo "Password should be min of 8 characters";
        }
    }else{
        echo "All input fields are required!";
    }
?>