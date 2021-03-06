﻿<html>
    <head>
        <meta charset="UTF-8">
        <title>All Students - AIMS</title>
        <link href="BootstrapFrmaework/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="BootstrapFrmaework/css/tikka.min.css" rel="stylesheet" type="text/css"/>
        <link href="BootstrapFrmaework/css/myStyle.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="margin-top: 0px">
        <?php
        include 'Templates/navbar.php';
        ?>
              <div class="jumbotron" style="height: 85px; margin-top: 0px">
            <h3>View All Instructors</h3>
        </div>         
        <div class="container">


            <table class="table table-hover">
                <tr style="text-align: center">
                    <th width="5%" scope="col" >Istructor ID</th>
                    <th width="20%" scope="col" >Ins Name</th>
                    <th width="15%" scope="col" >Ins NIC</th>
                    <th width="25%" scope="col" >Ins Address</th>
                    <th width="15%" scope="col" >Ins Mobile</th>
                    <th width="20%" scope="col" >Ins Email</th>
                </tr>

                <?php
                include 'dbConfig.php';
                $sql = "SELECT insID,name_in,nic,address,mobl,email FROM `db_aims_api#sl`.tbl_instructor;";
                $result = $db->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['insID'] . "</td>";
                        echo "<td>" . $row['name_in'] . "</td>";
                        echo "<td>" . $row['nic'] . "</td>";
                        echo "<td>" . $row['address'] . "</td>";
                        echo "<td>" . $row['mobl'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table>
        </div>
        <!-- JavaScript plugins (requires jQuery) -->    
        <script src="BootstrapFrmaework/jQuery/jquery-1.12.2.min.js" type="text/javascript"></script>
        <!-- Include all compiled plugins (below), or include individual  files as needed -->    
        <script src="BootstrapFrmaework/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="BootstrapFrmaework/js/tikka.min.js" type="text/javascript"></script>
        <script src="BootstrapFrmaework/js/brush.min.js" type="text/javascript"></script>
    </body>
</html>
