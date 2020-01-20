<?php
session_start();

include 'dbConfig.php';

$retrieveStudentData = "SELECT * FROM `db_aims_api#sl`.tbl_instructor WHERE nic = '".$_SESSION['VALIDATED_NIC_UPDATE']."';";

$result = mysqli_query($db,$retrieveStudentData);
   
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
    }

?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Update Student - AIMS</title>
        <link href="BootstrapFrmaework/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="BootstrapFrmaework/css/tikka.min.css" rel="stylesheet" type="text/css"/>
        <link href="BootstrapFrmaework/css/myStyle.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <?php
        include 'Templates/navbar.php';
        ?>
        <div class="jumbotron" style="height: 85px">
            <h3>Update Student</h3>
        </div>
        <form class="form-horizontal" role="form" action="updtIns_Code.php" method="POST" onsubmit="">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <label>Full Name:</label>
                        <input type="text" class="form-control" name="insFullName" id="name" value="<?php echo $row['name']; ?>" required="">
                        <p class="help-block"></p>

                        <label>NIC Number:</label>
                        <input type="text" class="form-control" name="insNIC" id="nic" max="12" value="<?php echo $row['nic'];?>" required="" readonly="true">

                        <label>Phone Number:</label>
                        <input type="tel" class="form-control" name="insPhone" id="phone" maxlength="10" value="<?php echo $row['mobl'];?>" required="">

                    </div>
                    <div class="col-md-6">
                        <label>Name with Initial:</label>
                        <input type="text" class="form-control" name="insNameWithInitials" id="iname" value="<?php echo $row['name_in'];?>" required="">

                        <label>Home Address:</label>
                        <input type="text" class="form-control" name="insHomeAddress" id="add" value="<?php echo $row['address'];?>" required="">

                        <label>Email Address:</label>
                        <input type="email" class="form-control" name="insEmail" id="email" value="<?php echo $row['email'];?>" required="">
                    </div>
                </div>
                <div class="row">
                    <br>
                    <div class="text-center mt-2">
                        <button class="btn btn-info btn-block" name="btn_updateInstructor">Update Instructor Data<i class="fa fa-sign-in ml-1"></i></button>
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