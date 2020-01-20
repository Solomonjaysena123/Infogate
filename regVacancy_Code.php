<?php

session_start();

if (isset($_POST['btn_addVacancy'])) {

    $vcCode = $_POST['vcCode'];
    $vcOpeningDate = $_POST['vcOpeningDate'];
    $vcClosingDate = $_POST['vcClosingDate'];
    $vcJobDescription = $_POST['vcJobDescription'];
    $vcQualifications = $_POST['vcQualifications'];

    include 'dbConfig.php';
    $addStudent = "INSERT INTO `db_aims_api#sl`.`tbl_addvacancies`
		(
		`JobTittle`,
		`Odate`,
		`Cdate`,
		`Jdescription`,
		`Qualification`)
		VALUES
                (
		'" . $vcCode . "',
		'" . $vcOpeningDate . "',
		'" . $vcClosingDate . "',
		'" . $vcJobDescription . "',
		'" . $vcQualifications . "');";
    echo $addStudent;
    $execClientResult = $db->query($addStudent);

    if ($execClientResult == TRUE) {
        #Redirect the URL if the Execution get Succeeded.
        $_SESSION['PROCESS'] = 'Add Vacancy';
        header("location: SuccessPage.php");
    } else {
        header("location: FailurePage.php");
    }
}
?>        
