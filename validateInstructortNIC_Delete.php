
<?php

session_start();
if (isset($_POST['btnValidateInstructorNIC'])) {
    if (empty($_POST['validateInsNIC'])) {
        $error = "InValid Instructor NIC Provided";
    }
    $uName = $_POST['validateInsNIC'];

    include 'dbConfig.php';


    $sql = "SELECT * FROM `db_aims_api#sl`.tbl_instructor WHERE nic = '" . $uName . "';";
    #Executing the Query
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $deleteStudent = "DELETE FROM `db_aims_api#sl`.`tbl_instructor` WHERE `insID`='".$row['stID']."';";
            $deleteResult = $db->query($deleteStudent);
            if ($deleteResult == TRUE) {
                $_SESSION['PROCESS'] = 'Delete Instructor Data #'.$row['insID'];
                header("location: ../SuccessPage.php");
            } else {
                header("location: ../FailurePage.php");
            }
        }
    }else{
        header("location: aims_delete_instructor_selection.php");
    }
}
?>

