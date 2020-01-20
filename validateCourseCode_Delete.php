
<?php
session_start();
if (isset($_POST['btnValidateCourseCode'])) {
    if (empty($_POST['validateCSCode'])) {
        $error = "InValid Course Code Provided";
    }
    $uName = $_POST['validateCSCode'];
    
    include 'dbConfig.php';
    

    $sql = "SELECT * FROM `db_aims_api#sl`.tbl_course WHERE CCode = '".$uName."';";
    #Executing the Query
    $result = $db->query($sql);
    
   if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $deleteStudent = "DELETE FROM `db_aims_api#sl`.`tbl_course` WHERE `courseID`='".$row['courseID']."';";
            $deleteResult = $db->query($deleteStudent);
            if ($deleteResult == TRUE) {
                $_SESSION['PROCESS'] = 'Delete Course Data #'.$row['courseID'];
                header("location: SuccessPage.php");
            } else {
                header("location: FailurePage.php");
            }
        }
    }else{
        header("location: aims_delete_course_selection.php");
    }
}
    
?>

