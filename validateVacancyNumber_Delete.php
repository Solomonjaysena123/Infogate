
<?php

session_start();
if (isset($_POST['btnValidateVCNumber'])) {
    if (empty($_POST['validateVCNumber'])) {
        $error = "InValid Vacancy Number Provided";
    }
    $uName = $_POST['validateVCNumber'];

    include 'dbConfig.php';


    $sql = "SELECT * FROM `db_aims_api#sl`.tbl_addvacancies WHERE JobTittle = '" . $uName . "';";
    #Executing the Query
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $deleteStudent = "DELETE FROM `db_aims_api#sl`.`tbl_addvacancies` WHERE `vacancyID`='".$row['vacancyID']."';";
            $deleteResult = $db->query($deleteStudent);
            if ($deleteResult == TRUE) {
                $_SESSION['PROCESS'] = 'Remove Vacancy Data #'.$row['stID'];
                header("location: SuccessPage.php");
            } else {
                header("location: FailurePage.php");
            }
        }
    }else{
        header("location: aims_delete_vacancy_selection.php");
    }
}
?>

