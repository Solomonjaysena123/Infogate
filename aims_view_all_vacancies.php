<html>
    <head>
        <meta charset="UTF-8">
        <title>All Vacancies - AIMS</title>
        <link href="BootstrapFrmaework/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="BootstrapFrmaework/css/tikka.min.css" rel="stylesheet" type="text/css"/>
        <link href="BootstrapFrmaework/css/myStyle.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="margin-top: 0px">
        <?php
        include 'Templates/navbar.php';
        ?>
              <div class="jumbotron" style="height: 85px; margin-top: 0px">
            <h3>View All Vacancies</h3>
        </div>         
        <div class="container">


            <table class="table table-hover">
                <tr style="text-align: center">
                    <th width="5%" scope="col" >Vacancy ID</th>
                    <th width="20%" scope="col" >Job Title</th>
                    <th width="15%" scope="col" >Op. Date</th>
                    <th width="15%" scope="col" >Cl. Date</th>
                    <th width="25%" scope="col" >Job Description</th>
                    <th width="15%" scope="col" >Qualifications</th>
                </tr>

                <?php
                include 'dbConfig.php';
                $sql = "SELECT vacancyID,JobTittle,Odate,Cdate,Jdescription,Qualification FROM `db_aims_api#sl`.tbl_addvacancies;";
                $result = $db->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['vacancyID'] . "</td>";
                        echo "<td>" . $row['JobTittle'] . "</td>";
                        echo "<td>" . $row['Odate'] . "</td>";
                        echo "<td>" . $row['Cdate'] . "</td>";
                        echo "<td>" . $row['Jdescription'] . "</td>";
                        echo "<td>" . $row['Qualification'] . "</td>";
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
