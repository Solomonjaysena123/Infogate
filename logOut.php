<?php
session_start();
unset($_SESSION['UNAME']);
unset($_SESSION['UTYPE']);

header("location: index_login.php");
?>