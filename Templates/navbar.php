<?php
session_start();?>
<?php
if (!isset($_SESSION['UNAME'])) {
    header('Location:index_login.php');
}
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header"> 
            <a class="navbar-brand" href="index_login.php">ICT Institute</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="AdminPage.php">Home</a></li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Students
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="aims_reg_student.php"target=""><i class="fa fa-sign-in"></i>Register Student</a></li>
                    <li><a href="aims_updt_student_selection.php"target="">Update Student</a></li>
                    <li><a href="aims_delete_student_selection.php"target="">Delete Student</a></li>
                    <li><a href="aims_view_all_Students.php"target="">View Students</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Courses
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="aims_add_course.php" target="">Add Course</a></li>
                    <li><a href="aims_updt_course_selection.php" target="">Update Course</a></li>
                    <li><a href="aims_delete_course_selection.php" target="">Terminate Course</a></li>
                    <li><a href="aims_view_all_Courses.php" target="">Available Courses</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Enrollments
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="aims_verify_student.php"target="">New Enroll</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Instructor
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="aims_reg_instructor.php"target="">Add Instructor</a></li>
                    <li><a href="aims_updt_instructor_selection.php"target="">Update Instructor</a></li>
                    <li><a href="aims_delete_instructor_selection.php"target="">Terminate Instructor</a></li>
                    <li><a href="aims_view_all_Instructors.php"target="">All Instructor</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Vacancies
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="aims_add_vacancies.php"target="">Add Vacancy</a></li>
                    <li><a href="aims_delete_vacancy_selection.php"target="">Remove Vacancy</a></li>
                    <li><a href="aims_view_all_vacancies.php"target="">Available Vacancies</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Reports
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="./Reports/Student_Details_Summary.php"target="">Student Summary</a></li>
                    <li><a href="./Reports/Instructor_Summary.php"target="">Instructor Summary</a></li>
                    <li><a href="./Reports/Course_Details_Summary.php"target="">Course Details</a></li>
                    <li><a href="./Reports/Vacancy_Details_Summary.php"target="">Vacancy Details</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">About
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="WhyWe.php"target="">Why We</a></li>
                    <li><a href="WhoWeAre.php"target="">About Us</a></li>
                    <li><a href="ContactUS.php"target="">Contact</a></li>
                </ul>
            </li>


        </ul>

        <ul class="nav navbar-nav navbar-right">
            <?php if (isset($_SESSION['UNAME'])) { ?>
                <li><a href="#">Welcome <?php echo $_SESSION['UNAME'] . " !"; ?></a></li>
                <li><a href="logOut.php">Logout</a></li>
                <?php
            } else {
                ?>
                <li><a href="#"data-toggle="modal" data-target="#signUP"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#" data-toggle="modal" data-target=""><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <?php } ?>
        </ul>

    </div>
</nav>
<!-- Login Form Design-->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#signIN" style="visibility: hidden">Open Modal</button>
<div id="signIN" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- modal header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login Form</h4>
            </div>
            <br>
            <!-- modal content-->
            <form class="form-horizontal" role="form" action="login.php" method="post" onsubmit="">
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="txtuName">User Name</label>  
                    <div class="col-md-4" style="width: 400px">
                        <input id="txtuName" name="txtuName" type="text" placeholder="User" class="form-control input-md" required="">
                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="txtpw">Password </label>
                    <div class="col-md-5" style="width: 400px">
                        <input id="txtpw" name="txtpw" type="password" placeholder="Password" class="form-control input-md" required="">
                    </div>
                </div>

                <!-- Button (Single) -->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="buttonlogin"></label>
                    <div class="col-md-8" style="width: 200px">
                        <button id="btn_id" name="btn_login" class="btn btn-success">Log In</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<!-- Sign UP Form Design-->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#signUP" style="visibility: hidden">Open Modal</button>
<div id="signUP" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- modal header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Customer Registration Form</h4>
            </div>
            <br>
            <!-- modal content -->
            <form class="form-horizontal" role="form" action="new_Registration.php" method="post" onsubmit="return validateRegistration()">
                <!-- Full Name input-->
                <div class="form-group text-left">
                    <label class="col-md-4 control-label" for="txt_fullName">Full Name</label>  
                    <div class="col-md-5" style="width: 300px">
                        <input id="fullName" name="txt_fullName" type="text" placeholder="Your Full Name" class="form-control input-md" required="">
                    </div>
                </div>
                <!-- Full Address input-->
                <div class="form-group text-left">
                    <label class="col-md-4 control-label" for="txt_address">Shipping Address</label>  
                    <div class="col-md-5" style="width: 300px">
                        <input id="address" name="txt_address" type="text" placeholder="Shipping Address" class="form-control input-md" required="">
                    </div>
                </div>

                <!-- User Name input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="txt_uName">User Name</label>  
                    <div class="col-md-5" style="width: 300px" >
                        <input id="uName" name="txt_uName" type="text" placeholder="Your User Name" class="form-control input-md" required="">
                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="txt_Pass">Password</label>  
                    <div class="col-md-5" style="width: 300px">
                        <input id="pass" name="txt_Pass" type="password" placeholder="Type Your Password" class="form-control input-md" required="">
                    </div>
                </div>

                <!-- Confirm Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="txt_cPass">Re - Type Password</label>  
                    <div class="col-md-5" style="width: 300px">
                        <input id="cPass" name="txt_Cpass" type="password" placeholder="Confirm Your Password" class="form-control input-md" required="">
                    </div>
                </div>

                <!-- E-Mail input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="txt_email">Email</label>  
                    <div class="col-md-5" style="width: 300px">
                        <input id="email" name="txt_email" type="text" placeholder="Your e-Mail" class="form-control input-md" required="">
                    </div>
                </div>
                <!-- 4n Number input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="txt_mobile">Mobile</label>  
                    <div class="col-md-5" style="width: 300px">
                        <input id="mobile" name="txt_mobile" type="text" placeholder="Your Contact No" class="form-control input-md" required="">
                    </div>
                </div>


                <!-- Registration Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="btnReg"></label>
                    <div class="col-md-4">
                        <button id="btnReg" name="btnReg" class="btn btn-success">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>