<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Vacancies - Infogate</title>
        <link href="../../../xampp/htdocs/InForget/BootstrapFrmaework/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../../xampp/htdocs/InForget/BootstrapFrmaework/css/tikka.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../../xampp/htdocs/InForget/BootstrapFrmaework/css/myStyle.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <?php
        include '../../../xampp/htdocs/InForget/Templates/navbar.php';
        ?>
        <div class="jumbotron" style="height: 85px">
            <h3>Add New Vacancy</h3>
        </div>
        <form class="form-horizontal" role="form" action="../../../xampp/htdocs/InForget/regVacancy_Code.php" method="POST" onSubmit="">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <label>Job Title:</label>
                        <input type="text" class="form-control" name="vcCode" id="name" required>
                        <p class="help-block"></p>

                        <label>Opening Date:</label>
                        <input type="date" class="form-control" name="vcOpeningDate" id="nic" max="12" required>

                        <label>Closing Date:</label>
                        <input type="date" class="form-control" name="vcClosingDate" id="iname" required>

                        <label>Job Description:</label>
                        <input type="text" class="form-control" name="vcJobDescription" id="iname" required>

                        <label>Qualification(s)</label>
                        <input type="text" class="form-control" name="vcQualifications" id="add" maxlength="120" required>

                        <br>
                        <div class="text-center mt-2">
                            <button class="btn btn-info btn-block" name="btn_addVacancy">Add Vacancy<i class="fa fa-sign-in ml-1"></i></button>
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

