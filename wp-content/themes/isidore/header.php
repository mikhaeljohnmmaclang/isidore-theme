<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name='viewport' content ="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?php echo get_theme_file_uri("images/icon.ico");?>"/>
        <?php wp_head(); ?>

        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/facilities/img-blur.css">
<link rel="stylesheet" href="../css/index.css">-->
        
    </head>
    <body>

        <!-- NAVIGATION BAR -->
        <div class="container-fluid text-center hidden-xs hidden-sm header-bg">
            <a href='../landing/index.php' alt='header-logo'><img src="<?php echo get_theme_file_uri("/images/isidore-logo.png")?>" class='logo'></a>
        </div>
        <!-- Static navbar -->
        <nav class="navbar navbar-default">
            <div class="container-fluid container-header">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <span class="hidden-lg hidden-md"><a class="navbar-brand" href="../landing/index.php"><img src="<?php echo get_theme_file_uri("/images/isidore-logo.png")?>" width='150px' style="margin-top: -9px;"></a></span>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="space purple"><a class="white" href="../landing/index.php">HOME</a></li>
                        <li class="space red dropdown"><a data-toggle='dropdown' class="dropdown-toggle white" role='button'
                                                          aria-haspopup="true" aria-expanded='false' href="#">ABOUT US</a>
                            <ul class="dropdown-menu red">
                                <li><a class="white" href='../about-us/history.php'>HISTORY</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a class="white" href="../about-us/whoisisidore.php">WHO IS ISIDORE?</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a class="white" href='../about-us/visionandmission.php'>OUR VISION AND MISSION</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a class="white" href='../about-us/ourschoolseal.php'>OUR SCHOOL SEAL</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a class="white" href='../about-us/oureducationalphilosophy.php'>OUR EDUCATIONAL
                                    PHILOSOPHY</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a class="white" href='../about-us/isidoreansprayer.php'>THE ISIDOREAN'S PRAYER</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a class="white" href='../about-us/monthlycalendar.php'>MONTHLY CALENDAR</a></li>
                            </ul>
                        </li>
                        <li class="space yellow-green"><a data-toggle='dropdown' class="dropdown-toggle white" role='button'
                                                          aria-haspopup="true" aria-expanded='false' href="#">PROGRAMS</a>
                            <ul class="dropdown-menu yellow-green">
                                <li><a class="white" href='../programs/preschool.php'>PRESCHOOL</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a class="white" href='../programs/gradeschool.php'>GRADESCHOOL</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a class="white" href='../programs/specialcourses.php'>SPECIAL COURSES</a></li>

                            </ul>
                        </li>
                        <li class="space light-blue dropdown"><a data-toggle='dropdown' class="dropdown-toggle white"
                                                                 role='button' aria-haspopup="true" aria-expanded='false'
                                                                 href="#">ADMISSIONS</a>
                            <ul class="dropdown-menu light-blue">
                                <li><a class="white" href='../admissions/preschool.php'>PRESCHOOL</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a class="white" href='../admissions/gradeschool.php'>GRADESCHOOL</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a class="white" href='../admissions/requirements.php'>REQUIREMENTS</a></li>
                            </ul>
                        </li>
                        <li class="space orange dropdown"><a data-toggle='dropdown' class="dropdown-toggle white stud-services"
                                                             role='button' aria-haspopup="true" aria-expanded='false' href="#">STUDENT
                            SERVICES</a>
                            <ul class="dropdown-menu orange">
                                <li><a class="white" href='../facilities/facilities.php'>FACILITIES</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a class="white indent" href='../facilities/classrooms.php'>CLASSROOMS</a></li>
                                <li><a class="white indent" href='../facilities/laboratories.php'>LABORATORIES</a></li>
                                <li><a class="white indent" href='../facilities/playground.php'>PLAYGROUND</a></li>
                                <li><a class="white indent" href='../facilities/sports-and-recreation.php'>SPORTS &
                                    RECREATION</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a class="white" href='../facilities/guidance-services.php'>GUIDANCE SERVICES</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a class="white" href='../facilities/library-services.php'>LIBRARY SERVICES</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a class="white" href='../facilities/health-services.php'>HEALTH SERVICES</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a class="white" href='../facilities/canteen-services.php'>CANTEEN SERVICES</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a class="white" href='../facilities/security-services.php'>SECURITY SERVICES</a></li>
                            </ul>
                        </li>
                        <li class="space green dropdown "><a data-toggle='dropdown' class="dropdown-toggle white studlife-menu"
                                                             role='button' aria-haspopup="true" aria-expanded='false' href="#">ISIDOREAN'S
                            LIFE</a>
                            <ul class="dropdown-menu green">
                                <li><a class="white" href='../student-life/studentactivities.php'>STUDENT ACTIVITIES</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a class="white" href='../student-life/clubs.php'>INTEREST CLUBS & ORGANIZATIONS</a></li>

                            </ul>
                        </li>
                        <li class="space light-green dropdown"><a data-toggle='dropdown' class="dropdown-toggle white"
                                                                  role='button' aria-haspopup="true" aria-expanded='false'
                                                                  href="#">UPDATES</a>
                            <ul class="dropdown-menu light-green">
                                <li><a class="white" href='../updates/news.php'>NEWS</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a class="white" href='../updates/announcements.php'>ANNOUNCEMENTS</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a class="white" href='../updates/testimonials.php'>TESTIMONIALS</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a class="white" href='../careers/careers.php'>CAREERS</a></li>
                            </ul>
                        </li>

                        <li class="space darkviolet"><a class="white" href="../contact-us/contact-us.php">CONTACT US</a></li>

                        <li class="space yellow"><a class="white" href="../forms/forms.php">FORMS</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>
