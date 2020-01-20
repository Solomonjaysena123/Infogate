<html>
    <head>
        <meta charset="UTF-8">
        <title>Select Student - Infogate</title>
        <link href="../../../xampp/htdocs/InForget/BootstrapFrmaework/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../../xampp/htdocs/InForget/BootstrapFrmaework/css/tikka.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../../xampp/htdocs/InForget/BootstrapFrmaework/css/myStyle.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
<?php
        include '../../../xampp/htdocs/InForget/Templates/navbar.php';
        ?>

        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form method="POST" action="../../../xampp/htdocs/InForget/validateInstructortNIC_Delete.php">
                        <h2><center>Select Instructor</center></h2>
                        <br>
                        <br>
                        <div class="single">  
                            <div class="form-container">

                                <div class="control-group form-group">
                                    <div class="controls">
                                        <label>Instructor NIC :</label>
                                        <input type="text" class="form-control" name="validateInsNIC" id="iname" required>
                                        <br><br>	
                                        <div class="success">
                                            <button type="submit" name="btnValidateInstructorNIC" value="Search" class="btn btn-primary btn-block">Validate Instructor NIC</button>
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
            include '../../../xampp/htdocs/InForget/Templates/footer.php';
            ?>

        </footer>

        <!-- JavaScript plugins (requires jQuery) -->    
        <script src="../../../xampp/htdocs/InForget/BootstrapFrmaework/jQuery/jquery-1.12.2.min.js" type="text/javascript"></script>
        <!-- Include all compiled plugins (below), or include individual  files as needed -->    
        <script src="../../../xampp/htdocs/InForget/BootstrapFrmaework/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../../xampp/htdocs/InForget/BootstrapFrmaework/js/tikka.min.js" type="text/javascript"></script>
        <script src="../../../xampp/htdocs/InForget/BootstrapFrmaework/js/brush.min.js" type="text/javascript"></script>
    </body>
</html>    