<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Courses - Infogate</title>
        <link href="BootstrapFrmaework/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="BootstrapFrmaework/css/tikka.min.css" rel="stylesheet" type="text/css"/>
        <link href="BootstrapFrmaework/css/myStyle.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <?php
        include 'Templates/navbar.php';
        ?>
        <div class="jumbotron" style="height: 85px">
            <h3>Add New Course</h3>
        </div>
        <form class="form-horizontal" role="form" action="regCourse_Code.php" method="POST" onSubmit="">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <label>Course Code:</label>
                        <input type="text" class="form-control" name="csCode" id="name" required>
                        <p class="help-block"></p>

                        <label>Course Name:</label>
                        <input type="text" class="form-control" name="csName" id="nic" max="12" required>

                        <label>Instructor Name:</label>
                        <div class="control-group form-group">
                            <div class="controls">
                                <select name="Insname" id="InsName" class="form-control input-lg" style="width: 550px; margin-left: 15px">
                                    <option value ="0">Assign Instructor</option>
                                    <?php
                                    mysql_connect('localhost', 'root', '');
                                    mysql_select_db('`db_aims_api#sl');

                                    $sql = "SELECT name FROM `db_aims#sl`.tbl_instructor;";
                                    $result = mysql_query($sql);
                                    while ($row = mysql_fetch_array($result)) {
                                        echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
                                    }
                                    ?>
                                    <option value=""></option>     
                                </select>
                            </div>
                        </div>

                        <label>Course Fees:</label>
                        <input type="number" class="form-control" name="csFees" id="iname" required>
                        
                        <label>Course Duration:</label>
                        <input type="text" class="form-control" name="csDuration" id="iname" required>

                        <label>Course Description:</label>
                        <input type="text" class="form-control" name="csDescription" id="add" maxlength="120" required>

                        <br>
                        <div class="text-center mt-2">
                            <button class="btn btn-info btn-block" name="btn_addCourse">Add Course<i class="fa fa-sign-in ml-1"></i></button>
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

