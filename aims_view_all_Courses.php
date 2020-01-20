<html>
    <head>
        <meta charset="UTF-8">
        <title>All Courses - AIMS</title>
        <link href="BootstrapFrmaework/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="BootstrapFrmaework/css/tikka.min.css" rel="stylesheet" type="text/css"/>
        <link href="BootstrapFrmaework/css/myStyle.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="margin-top: 0px">
        <?php
        include 'Templates/navbar.php';
        ?>
              <div class="jumbotron" style="height: 85px; margin-top: 0px">
            <h3>View All Courses</h3>
        </div>         
        <div class="container">


            <table class="table table-hover">
                <tr style="text-align: center">
                    <th width="5%" scope="col" >Course Code</th>
                    <th width="30%" scope="col" >CS Name</th>
                    <th width="15%" scope="col" >CS Ins Name</th>
                    <th width="10%" scope="col" >CS Duration</th>
                    <th width="10%" scope="col" style="text-align: center">CS Fees</th>
                    <th width="40%" scope="col" >CS Description</th>
                </tr>

                <?php
                include 'dbConfig.php';
                $sql = "SELECT CCode,CName,InsName,CDuration,CFee,Description FROM `db_aims_api#sl`.tbl_course;";
                $result = $db->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['CCode'] . "</td>";
                        echo "<td>" . $row['CName'] . "</td>";
                        echo "<td>" . $row['InsName'] . "</td>";
                        echo "<td>" . $row['CDuration'] . "</td>";
                        echo "<td style='text-align: right'>" . $row['CFee'] . "</td>";
                        echo "<td>" . $row['Description'] . "</td>";
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
