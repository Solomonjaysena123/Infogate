
<html>
    <head>
        <meta charset="UTF-8">
        <title>Infogate Institute</title>
        <!-- Bootstrap --> 
        <link href="../../../xampp/htdocs/InForget/BootstrapFrmaework/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../../xampp/htdocs/InForget/BootstrapFrmaework/css/tikka.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../../xampp/htdocs/InForget/BootstrapFrmaework/css/myStyle.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="jumbotron">
            
            <img src="../../../xampp/htdocs/InForget/Resources/Images/infogate.jpg" alt="" width="250px" height="200px" class="center-block"/>
            <h1 style="text-align: center">Infogate Institute</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h3 style="text-align: center">Login</h3>
                    <form class="form-horizontal" role="form" action="../../../xampp/htdocs/InForget/login.php" method="post" onSubmit="">
                        <!--Body-->
                        <div class="modal-body mb-1">
                            <div class="md-form form-sm">
                                <label>Your Username</label>
                                <i class="fa fa-envelope prefix"></i>
                                <input type="text" id="form22" name="txt_userEmail"class="form-control" placeholder="someone@example.com" required>
                            </div>

                            <div class="md-form form-sm">
                                <label>Your password</label>
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="form23" name="txt_userPassword" class="form-control" required>
                            </div>
                            <div class="text-center mt-2">
                                <button class="btn btn-info" name="btn_userLogin">Log in <i class="fa fa-sign-in ml-1"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        
        <?php
        include '../../../xampp/htdocs/InForget/Templates/footer.php';
        ?>
        <!-- JavaScript plugins (requires jQuery) -->    
        <script src="../../../xampp/htdocs/InForget/BootstrapFrmaework/jQuery/jquery-1.12.2.min.js" type="text/javascript"></script>
        <!-- Include all compiled plugins (below), or include individual  files as needed -->    
        <script src="../../../xampp/htdocs/InForget/BootstrapFrmaework/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../../xampp/htdocs/InForget/BootstrapFrmaework/js/tikka.min.js" type="text/javascript"></script>
        <script src="../../../xampp/htdocs/InForget/BootstrapFrmaework/js/brush.min.js" type="text/javascript"></script>
    </body>
</html>
