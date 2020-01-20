
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
            $_SESSION['VALIDATED_CCODE_UPDATE'] = $uName;
            header("location: aims_updt_course.php");
        }
    } else {
        header("location: aims_updt_course_selection.php");
    }
}
    
?>

