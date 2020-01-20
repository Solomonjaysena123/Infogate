<?php
session_start();

if (isset($_POST['btn_registerInstructor'])) {

    $insFullName = $_POST['insFullName'];
    $insNameWithInitials = $_POST['insNameWithInitials'];
    $insNIC = $_POST['insNIC'];
    $insAddress = $_POST['insHomeAddress'];
    $insMobile = $_POST['insPhone'];
    $insEmail = $_POST['insEmail'];

    include 'dbConfig.php';
    $addStudent = "INSERT INTO `db_aims_api#sl`.`tbl_instructor`
        (`name`,
        `name_in`,
        `nic`,
        `address`,
        `mobl`,
        `email`)
        VALUES
        ('".$insFullName."',
        '".$insNameWithInitials."',
        '".$insNIC."',
        '".$insAddress."',
        '".$insMobile."',
        '".$insEmail."');";
    echo $addStudent;
	$execClientResult = $db->query($addStudent);
        
        if($execClientResult == TRUE){
            #Redirect the URL if the Execution get Succeeded.
            $_SESSION['PROCESS'] = 'Instructor Registration';
            header("location: SuccessPage.php");
            
        }else{
            header("location: FailurePage.php");
        }
}
?>        

