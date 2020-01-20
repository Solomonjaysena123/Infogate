<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>New Enroll - AIMS</title>
        <link href="BootstrapFrmaework/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="BootstrapFrmaework/css/tikka.min.css" rel="stylesheet" type="text/css"/>
        <link href="BootstrapFrmaework/css/myStyle.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <?php
        include 'Templates/navbar.php';
        ?>
        
        <div class="jumbotron" style="height: 85px">
            <h3>Add New Enroll</h3>
        </div>
        <form class="form-horizontal" role="form" action="regEnroll_Code.php" method="POST" onsubmit="">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <label>Student NIC:</label>
                        <input type="text" class="form-control" name="enNIC" id="name" value="<?php echo $_SESSION['VALIDATED_NIC_ENROLL'] ?>" required="">
                        <p class="help-block"></p>

                        <label>Course Code:</label>
                        <input type="text" class="form-control" name="enCC" id="nic" max="12" required="">

                        <br>
                        <div class="text-center mt-2">
                            <button class="btn btn-info btn-block" name="btn_Enroll">Add Course<i class="fa fa-sign-in ml-1"></i></button>
                        </div>
                    </div>
                    <div class="col-md-8">
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
                </div>

            </div>
        </form>

    </div>

    <hr> 
    <footer>
        <?php
        include 'Templates/footer.php';
        ?>

    </footer>

    <!-- JavaScript plugins (requires jQuery) -->    
    <script src="BootstrapFrmaework/jQuery/jquery-1.12.2.min.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual  files as needed -->    
    <script src="BootstrapFrmaework/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="BootstrapFrmaework/js/tikka.min.js" type="text/javascript"></script>
    <script src="BootstrapFrmaework/js/brush.min.js" type="text/javascript"></script>
</body>
</html>    

