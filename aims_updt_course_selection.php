<html>
    <head>
        <meta charset="UTF-8">
        <title>Select Course - AIMS</title>
        <link href="BootstrapFrmaework/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="BootstrapFrmaework/css/tikka.min.css" rel="stylesheet" type="text/css"/>
        <link href="BootstrapFrmaework/css/myStyle.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>

<?php
        include 'Templates/navbar.php';
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form method="POST" action="validateCourseCode_Update.php">
                        <h2><center>Select Course </center></h2>
                        <br>
                        <br>
                        <div class="single">  
                            <div class="form-container">

                                <div class="control-group form-group">
                                    <div class="controls">
                                        <label>Course Code :</label>
                                        <input type="text" class="form-control" name="validateCSCode" id="iname" required="">
                                        <br><br>	
                                        <div class="success">
                                            <button type="submit" name="btnValidateCourseCode" value="Search" class="btn btn-primary btn-block">Validate Course Code</button>
                                            <br>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>

        <!-- Footer -->
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