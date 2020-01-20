<?php
session_start();

if (isset($_POST['btn_Enroll'])) {

    $enNIC = $_POST['enNIC'];
    $enCC = $_POST['enCC'];
   

    include 'dbConfig.php';
    $addStudent = "INSERT INTO `db_aims_api#sl`.`tbl_enroll`
        (
        `studentNIC`,
        `courseCode`
        )
        VALUES
        ('".$enNIC."',
        '".$enCC."'
        );";
	
	$execClientResult = $db->query($addStudent);
        echo $addStudent;
        if($execClientResult == TRUE){
            #Redirect the URL if the Execution get Succeeded.
            $_SESSION['PROCESS'] = 'Student Enrolled';
            header("location: SuccessPage.php");
            
        }else{
            header("location: FailurePage.php");
        }
}
?>        

