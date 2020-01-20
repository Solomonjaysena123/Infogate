<?php
session_start();

if (isset($_POST['btn_updateCourse'])) {

    $csCode = $_POST['csCode'];
    $csName = $_POST['csName'];
    $csInsName = $_POST['Insname'];
    $csFees = $_POST['csFees'];
    $csDuration = $_POST['csDuration'];
    $csDescription = $_POST['csDescription'];


    include 'dbConfig.php';
    $addStudent = "UPDATE `db_aims_api#sl`.`tbl_course`
        SET
        `CName` = '".$csName."',
        `CDuration` = '".$csDuration."',
        `CFee` = '".$csFees."',
        `Description` = '".$csDescription."',
        `updated_at` = now()
        WHERE `CCode` = '".$csCode."';";
	
	$execClientResult = $db->query($addStudent);
        
        if($execClientResult == TRUE){
            #Redirect the URL if the Execution get Succeeded.
            $_SESSION['PROCESS'] = 'Update Course Data'.$csCode;
            header("location: SuccessPage.php");
            
        }else{
            header("location: FailurePage.php");
        }
}
?>        

