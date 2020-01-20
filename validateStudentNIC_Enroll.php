
<?php
session_start();
if (isset($_POST['btnValidateStudentNIC'])) {
    if (empty($_POST['validateStNIC'])) {
        $error = "InValid Student NIC Provided";
    }
    $uName = $_POST['validateStNIC'];
    
    include 'dbConfig.php';
    

    $sql = "SELECT * FROM `db_aims_api#sl`.tbl_student WHERE nic = '".$uName."';";
    #Executing the Query
    $result = $db->query($sql);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $_SESSION['VALIDATED_NIC_ENROLL'] = $uName;
            header("location: aims_new_enroll.php");
        }
    } else {
        header("location: aims_verify_student.php");
    }
}
    
?>

