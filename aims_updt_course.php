<?php
session_start();

include 'dbConfig.php';

$retrieveStudentData = "SELECT CCode,CName,InsName,CDuration,CFee,Description FROM `db_aims_api#sl`.tbl_course WHERE CCode = '".$_SESSION['VALIDATED_CCODE_UPDATE']."';";

$result = mysqli_query($db,$retrieveStudentData);
   
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
    }

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Update Courses - AIMS</title>
        <link href="BootstrapFrmaework/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="BootstrapFrmaework/css/tikka.min.css" rel="stylesheet" type="text/css"/>
        <link href="BootstrapFrmaework/css/myStyle.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <?php
        include 'Templates/navbar.php';
        ?>
        <div class="jumbotron" style="height: 85px">
            <h3>Update Course</h3>
        </div>
        <form class="form-horizontal" role="form" action=updtCourse_Code.php" method="POST" onsubmit="">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <label>Course Code:</label>
                        <input type="text" class="form-control" name="csCode" id="name" value="<?php echo $row['CCode']; ?>" required="">
                        <p class="help-block"></p>

                        <label>Course Name:</label>
                        <input type="text" class="form-control" name="csName" id="nic" max="12" value="<?php echo $row['CName']; ?>" required="">

                        <label>Course Fees:</label>
                        <input type="text" class="form-control" name="csFees" id="iname" value="<?php echo $row['CName']; ?>" required="">
                        
                        <label>Course Duration:</label>
                        <input type="text" class="form-control" name="csDuration" id="iname" value="<?php echo $row['CDuration']; ?>" required="">

                        <label>Course Description:</label>
                        <input type="text" class="form-control" name="csDescription" id="add" maxlength="120" value="<?php echo $row['Description']; ?>" required="">

                        <label>Instructor Name:</label>
                        <div class="control-group form-group">
                            <div class="controls">
                                <select name="Insname" id="InsName" class="form-control input-lg" style="width: 550px; margin-left: 15px">
                                    <?php
                                    mysql_connect('localhost', 'root', '');
                                    mysql_select_db('`db_aims_api#sl');

                                    $sql = "SELECT InsName FROM `db_aims_api#sl`.tbl_course WHERE CCode = '".$_SESSION['VALIDATED_CCODE_UPDATE']."';";
                                    $result = mysql_query($sql);
                                    while ($row = mysql_fetch_array($result)) {
                                        echo "<option value='" . $row['InsName'] . "'>" . $row['InsName'] . "</option>";
                                    }
                                    ?>
                                    <option value=""></option>     
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="text-center mt-2">
                            <button class="btn btn-info btn-block" name="btn_updateCourse">Update Course<i class="fa fa-sign-in ml-1"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
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

