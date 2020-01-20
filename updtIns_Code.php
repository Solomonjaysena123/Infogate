<?php
session_start();

if (isset($_POST['btn_updateInstructor'])) {

    $insFullName = $_POST['insFullName'];
    $insNameWithInitials = $_POST['insNameWithInitials'];
    $insNIC = $_POST['insNIC'];
    $insAddress = $_POST['insHomeAddress'];
    $insMobile = $_POST['insPhone'];
    $insEmail = $_POST['insEmail'];

    include 'dbConfig.php';
    $addStudent = "UPDATE `db_aims_api#sl`.`tbl_instructor`
        SET
        `name` = '".$insFullName."',
        `name_in` = '".$insNameWithInitials."',
        `address` = '".$insAddress."',
        `mobl` = '".$insNIC."',
        `email` = '".$insEmail."',
        `updated_at` = now()
        WHERE `nic` = '".$insNIC."';";
	
	$execClientResult = $db->query($addStudent);
        
        if($execClientResult == TRUE){
            $_SESSION['PROCESS'] = 'Update Instructor Data';
            header("location: SuccessPage.php");
            
        }else{
            header("location: FailurePage.php");
        }
}
?>        

