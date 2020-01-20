<?php
session_start();

if (isset($_POST['btn_updateStudent'])) {

    $stFullName = $_POST['stFullName'];
    $stNameWithInitials = $_POST['stNameWithInitials'];
    $stNIC = $_POST['stNIC'];
    $stAddress = $_POST['stHomeAddress'];
    $stMobile = $_POST['stPhone'];
    $stEmail = $_POST['stEmail'];

    include 'dbConfig.php';
    $addStudent = "UPDATE `db_aims_api#sl`.`tbl_student`
        SET
        `name` = '".$stFullName."',
        `name_in` = '".$stNameWithInitials."',
        `address` = '".$stAddress."',
        `mobl` = '".$stNIC."',
        `email` = '".$stEmail."',
        `updated_at` = now()
        WHERE `nic` = '".$stNIC."';";
	
	$execClientResult = $db->query($addStudent);
        
        if($execClientResult == TRUE){
            $_SESSION['PROCESS'] = 'Update Student Data';
            header("location: SuccessPage.php");
            
        }else{
            header("location: FailurePage.php");
        }
}
?>        

