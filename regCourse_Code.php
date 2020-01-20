<?php
session_start();

if (isset($_POST['btn_addCourse'])) {

    $csCode = $_POST['csCode'];
    $csName = $_POST['csName'];
    $csInsName = $_POST['Insname'];
    $csFees = $_POST['csFees'];
    $csDuration = $_POST['csDuration'];
    $csDescription = $_POST['csDescription'];


    include 'dbConfig.php';
    $addStudent = "INSERT INTO `db_aims_api#sl`.`tbl_course`
        (`CCode`,
        `CName`,
        `InsName`,
        `CDuration`,
        `CFee`,
        `Description`)
        VALUES
        ('".$csCode."',
        '".$csName."',
        '".$csInsName."',
        '".$csFees."',
        '".$csDuration."',
        '".$csDescription."');";
	
	$execClientResult = $db->query($addStudent);
        
        if($execClientResult == TRUE){
            #Redirect the URL if the Execution get Succeeded.
            $_SESSION['PROCESS'] = 'Add Course';
            header("location: SuccessPage.php");
            
        }else{
            header("location: FailurePage.php");
        }
}
?>        

