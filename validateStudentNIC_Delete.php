
<?php

session_start();
if (isset($_POST['btnValidateStudentNIC'])) {
    if (empty($_POST['validateStNIC'])) {
        $error = "InValid Student NIC Provided";
    }
    $uName = $_POST['validateStNIC'];

    include 'dbConfig.php';


    $sql = "SELECT * FROM `db_aims_api#sl`.tbl_student WHERE nic = '" . $uName . "';";
    #Executing the Query
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $deleteStudent = "DELETE FROM `db_aims_api#sl`.`tbl_student` WHERE `stID`='".$row['stID']."';";
            $deleteResult = $db->query($deleteStudent);
            if ($deleteResult == TRUE) {
                $_SESSION['PROCESS'] = 'Delete Student Data #'.$row['stID'];
                header("location: SuccessPage.php");
            } else {
                header("location: FailurePage.php");
            }
        }
    }else{
        header("location: aims_delete_student_selection.php");
    }
}
?>

