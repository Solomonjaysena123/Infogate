<html>
    <head>
        <meta charset="UTF-8">
        <title>Student Registration - AIMS</title>
        <link href="BootstrapFrmaework/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="BootstrapFrmaework/css/tikka.min.css" rel="stylesheet" type="text/css"/>
        <link href="BootstrapFrmaework/css/myStyle.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <?php
        include 'Templates/navbar.php';
        ?>
        <div class="jumbotron" style="height: 85px">
            <h3>Register Student</h3>
        </div>
        <form class="form-horizontal" role="form" action="regStu_Code.php" method="POST" onsubmit="">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <label>Full Name:</label>
                        <input type="text" class="form-control" name="stFullName" id="name" required="">
                        <p class="help-block"></p>

                        <label>NIC Number:</label>
                        <input type="text" class="form-control" name="stNIC" id="nic" max="12" required="">

                        <label>Phone Number:</label>
                        <input type="tel" class="form-control" name="stPhone" id="phone" maxlength="10" required="">

                    </div>
                    <div class="col-md-6">
                        <label>Name with Initial:</label>
                        <input type="text" class="form-control" name="stNameWithInitials" id="iname" required="">

                        <label>Home Address:</label>
                        <input type="text" class="form-control" name="stHomeAddress" id="add" required="">

                        <label>Email Address:</label>
                        <input type="email" class="form-control" name="stEmail" id="email" required="">
                    </div>
                </div>
                <div class="row">
                    <br>
                    <div class="text-center mt-2">
                        <button class="btn btn-info btn-block" name="btn_registerStudent">Register Student<i class="fa fa-sign-in ml-1"></i></button>
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