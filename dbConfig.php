

<?php
    $dbHost = 'db_aims#sl'; #Database Location
    $dbUsername = 'root';  #Database Username
    $dbPassword = '';      #Database Password
    $dbName = 'db_aims_api#sl'; #Database Name

    //Create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($db->connect_error) {
        die("Unable to connect database: " . $db->connect_error);
    } 
?>