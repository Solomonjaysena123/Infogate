<?php
session_start();
if (isset($_POST['btn_userLogin'])) {
    if (empty($_POST['txt_userEmail']) || empty($_POST['txt_userPassword'])) {
        $error = "Username or Password is invalid";
    }
    $uName = $_POST['txt_userEmail']; #Posted Username
    $pass = $_POST['txt_userPassword']; #Posted Password
    include 'dbConfig.php'; #Import Database Connection
    
    #Querying the Database
    $sql = "SELECT "
            . "userNIC, "
            . "userPassword "
            . "FROM tbl_user "
            . "WHERE "
            . "userNIC = '$uName' "
            . "AND "
            . "userPassword = '$pass';";
    #Executing the Query
    $result = $db->query($sql);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $_SESSION['UNAME'] = $uName;
            header("location: AdminPage.php");
            
        }
    } else {
        header("location: index_login.php");
    }
}
    
?>

