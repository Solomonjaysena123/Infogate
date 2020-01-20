
<?php
session_start();
if (isset($_POST['btnValidateInsNIC'])) {
    if (empty($_POST['validateInsNIC'])) {
        $error = "InValid Instructor NIC Provided";
    }
    $uName = $_POST['validateInsNIC'];
    
    include 'dbConfig.php';
    

    $sql = "SELECT * FROM `db_aims_api#sl`.tbl_instructor WHERE nic = '".$uName."';";
    #Executing the Query
    $result = $db->query($sql);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $_SESSION['VALIDATED_NIC_UPDATE'] = $uName;
            header("location: aims_updt_instructor.php");
        }
    } else {
        header("location: aims_updt_instructor_selection.php");
    }
}
    
?>

