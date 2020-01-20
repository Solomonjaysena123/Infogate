<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Successful Transactions</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
        <link href="BootstrapFrmaework/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="BootstrapFrmaework/css/tikka.min.css" rel="stylesheet" type="text/css"/>
        <link href="BootstrapFrmaework/css/myStyle.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>

        <div class="container">
            <br>
            <br>
            <br>
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="text-center">
                    <i class="fa fa-check fa-4x mb-1 animated rotateIn success" style="color: #007E33"></i>
                    <h2 style="color: #007E33">Success !<br><?php echo $_SESSION['PROCESS'] ?> <br>Task Completed....</h2>
                    <br>
                    <div class="text-center mt-2">
                        <a href="AdminPage.php" class="btn btn-success btn-block">Get Back to Home</a>
                        <?php
                             $_SESSION['PROCESS'] = '';
                        ?>
                    </div>
                    <br>
                </div>
            </div>
            <div class="col-md-3"></div>

        </div>


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
