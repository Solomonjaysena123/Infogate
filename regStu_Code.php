<?php
session_start();

if (isset($_POST['btn_registerStudent'])) {

    $stFullName = $_POST['stFullName'];
    $stNameWithInitials = $_POST['stNameWithInitials'];
    $stNIC = $_POST['stNIC'];
    $stAddress = $_POST['stHomeAddress'];
    $stMobile = $_POST['stPhone'];
    $stEmail = $_POST['stEmail'];

    include 'dbConfig.php';
    $addStudent = "INSERT INTO `db_aims_api#sl`.`tbl_student`
        (`name`,
        `name_in`,
        `nic`,
        `address`,
        `mobl`,
        `email`)
        VALUES
        ('".$stFullName."',
        '".$stNameWithInitials."',
        '".$stNIC."',
        '".$stAddress."',
        '".$stMobile."',
        '".$stEmail."');";
	
	$execClientResult = $db->query($addStudent);
        
        if($execClientResult == TRUE){
            #Redirect the URL if the Execution get Succeeded.
            $_SESSION['PROCESS'] = 'Student Registration';
            header("location: SuccessPage.php");
            
        }else{
            header("location: FailurePage.php");
        }
}
?>        

