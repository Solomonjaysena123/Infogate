<html>
    <head>
        <meta charset="UTF-8">
        <title>Why We - Infogate</title>
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
                <div class="col-lg-12">
                    <h1 class="page-header">Why 'Institute'?</h1>
                    <ol class="breadcrumb">
                        <li><a href="AdminPage.php">Home</a>
                        </li>
                        <li class="active">Services</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Image Header -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="Resources/Images/slide 01.jpg" alt="Chania">
                            </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
            </div>

            <hr>
            <hr>
            <!-- Service Tabs -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Our Services for Students</h2>
                </div>
                <div class="col-lg-12">

                    <ul id="myTab" class="nav nav-tabs nav-justified">
                        <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-support"></i> Excellence and Experience Education </a>
                        </li>
                        <li class=""><a href="#service-two" data-toggle="tab"><i class="fa fa-support"></i> Student Centered Learning Environment with Latest Facilities</a>
                        </li>
                        <li class=""><a href="#service-three" data-toggle="tab"><i class="fa fa-support"></i> Developing Skills. Personality and Character</a>
                        </li>
                        <li class=""><a href="#service-four" data-toggle="tab"><i class="fa fa-support"></i> Career Guidance and Job Placement Support</a>
                        </li>
                    </ul>

                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="service-one">
                            <h4></h4>
                            <p style="text-align: center">The 7 Years of experience we carry along with us in the higher education sector, especially in Infogate, headed by a very senior leadership. We employ some of the most experienced people in the industry. Our trainers have trained people from all walks, produced thousands of professionals, setting benchmarks in the industry. We consider this as one of our core strengths in the training sector.</p>
                        </div>
                        
                        <div class="tab-pane fade" id="service-two">
                            <p style="text-align: center">We strongly believe in empowering our students to become lifelong self learners, promoting autonomy, decision making and creative thinking. Our class rooms are setup in such a way to provide a Student Centered Learning Environment. Equipped with the latest facilities necessary for academic work, we also provide an online learning environment for our students.</p>
                        </div>
                        
                        <div class="tab-pane fade" id="service-three">
                            <p>Closely working with the students, we help them to develop their Entrepreneurship and Soft Skills to equip our students to become world class professionals. We always believe that a balanced person will make an all-round professional, going along with this we at IDM provides the student with necessary facilities to enjoy a great student life. Our annual student events include; Sport and Cricket Carnival, Annual Badminton encounter, HND get-together, Talent Search and many more.</p>
                        </div>
                        
                        <div class="tab-pane fade" id="service-four">
                            <p>At IDM Students are recruited to Professional, Undergraduate and Postgraduate programs according to their skills and professional desires. We guide them to take up relevant local and/or international programs, with the objective of making them World Class Professionals. Our students are also provided with the opportunity to obtain internships with leading business organizations in the capital city and though out the island.</p>
                        </div>
                        
                    </div>
                </div>
            </div>

            <footer>
                
                <br><br><br>
                <?php
                include './Templates/footer.php';
                ?>
            </footer>
        </div>
        <script src="BootstrapFrmaework/jQuery/jquery-1.12.2.min.js" type="text/javascript"></script>
        <!-- Include all compiled plugins (below), or include individual  files as needed -->    
        <script src="BootstrapFrmaework/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="BootstrapFrmaework/js/tikka.min.js" type="text/javascript"></script>
        <script src="BootstrapFrmaework/js/brush.min.js" type="text/javascript"></script>

    </body>

</html>