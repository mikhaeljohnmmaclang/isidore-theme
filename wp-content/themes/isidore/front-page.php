<?php get_header(); ?>  

<!-- BANNER -->
<div class="container-fluid banner-style">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner-style">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
                <li data-target="#myCarousel" data-slide-to="6"></li>
                <li data-target="#myCarousel" data-slide-to="7"></li>
                <li data-target="#myCarousel" data-slide-to="8"></li>
                <li data-target="#myCarousel" data-slide-to="9"></li>
                <li data-target="#myCarousel" data-slide-to="10"></li>
            </ol>


            <div class="carousel-inner">
                <div class="item active">
                    <div class="bg-blur hidden-xs"
                         style="background-image: url('<?php echo get_theme_file_uri("/images/landing/1.jpg")?>');">
                    </div>
                    <div class="wrapper">
                        <img src="<?php echo get_theme_file_uri("/images/landing/1.jpg")?>">
                    </div>
                </div>
                <div class="item">
                    <div class="bg-blur hidden-xs"
                         style="background-image: url('<?php echo get_theme_file_uri("/images/landing/2.jpg");?>">
                    </div>
                    <div class="wrapper">
                        <img src="<?php echo get_theme_file_uri("/images/landing/2.jpg");?>">
                    </div>
                </div>
                <div class="item">
                    <div class="bg-blur hidden-xs"
                         style="background-image: url('<?php echo get_theme_file_uri("/images/landing/3.jpg");?>">
                    </div>
                    <div class="wrapper">
                        <img src="<?php echo get_theme_file_uri("/images/landing/3.jpg")?>">
                    </div>
                </div>
                <div class="item">
                    <div class="bg-blur hidden-xs"
                         style="background-image: url('<?php echo get_theme_file_uri("/images/landing/4.jpg"); ?>')">
                    </div>
                    <div class="wrapper">
                        <img src="<?php echo get_theme_file_uri("/images/landing/4.jpg") ?>">
                    </div>
                </div>
                <div class="item">
                    <div class="bg-blur hidden-xs"
                         style="background-image: url('<?php echo get_theme_file_uri("/images/landing/5.jpg");?>')">
                    </div>
                    <div class="wrapper">
                        <img src="<?php echo get_theme_file_uri("/images/landing/5.jpg")?>">
                    </div>
                </div>
                <div class="item">
                    <div class="bg-blur hidden-xs"
                         style="background-image: url('<?php echo get_theme_file_uri("/images/landing/6.jpg");?>">
                    </div>
                    <div class="wrapper">
                        <img src="<?php echo get_theme_file_uri("/images/landing/6.jpg")?>">
                    </div>
                </div>
                <div class="item">
                    <div class="bg-blur hidden-xs"
                         style="background-image: url('<?php echo get_theme_file_uri("/images/landing/7.jpg");?>">
                    </div>
                    <div class="wrapper">
                        <img src="<?php echo get_theme_file_uri("/images/landing/7.jpg")?>">
                    </div>
                </div>
                <div class="item">
                    <div class="bg-blur hidden-xs"
                         style="background-image: url('<?php echo get_theme_file_uri("/images/landing/8.jpg");?>">
                    </div>
                    <div class="wrapper">
                        <img src="<?php echo get_theme_file_uri("/images/landing/8.jpg")?>">
                    </div>
                </div>
                <div class="item">
                    <div class="bg-blur hidden-xs"
                         style="background-image: url('<?php echo get_theme_file_uri("/images/landing/9.jpg");?>">
                    </div>
                    <div class="wrapper">
                        <img src="<?php echo get_theme_file_uri("/images/landing/9.jpg")?>">
                    </div>
                </div>
                <div class="item">
                    <div class="bg-blur hidden-xs"
                         style="background-image: url('<?php echo get_theme_file_uri("/images/landing/10.jpg");?>">
                    </div>
                    <div class="wrapper">
                        <img src="<?php echo get_theme_file_uri("/images/landing/10.jpg")?>">
                    </div>
                </div>
                <div class="item">
                    <div class="bg-blur hidden-xs"
                         style="background-image: url('<?php echo get_theme_file_uri("/images/landing/11.jpg");?>">
                    </div>
                    <div class="wrapper">
                        <img src="<?php echo get_theme_file_uri("/images/landing/11.jpg")?>">
                    </div>
                </div>
            </div>



            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<!--SECOND PART-->
<div class="container-fluid banner-style" >
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 left-section" style='padding-left:0px; padding-right:0px'>
            <div class="row events-section" >
                <h3 class="list-of-events-heading text-center bold">Announcements</h3>
                <?php 

                            $homepageAnnouncements = new WP_Query(array( 
                                'posts_per_page' => 2,  
                                'post_type' => 'announcement',
                            ));/* custom queries */

                         while($homepageAnnouncements->have_posts()) {
                             $homepageAnnouncements->the_post();
                            ?>
                <div class='col-md-12' style='padding-right: 0px;padding-left: 0px; margin-bottom: 7%;'>
                   <div class="event1-pic"> <?php the_post_thumbnail(); ?> </div> 
                    <!--<img src="<?php //echo get_theme_file_uri("/images/index/announcement-1.jpg");?>" width="100%" class="event1-pic">-->

                </div>
                <?php 
                   }//end of while loop
                ?>
                <!--<div class='col-md-12' style='padding-right: 0px;padding-left: 0px; margin-bottom: 7%;'>
                    <img src="<?php echo get_theme_file_uri("/images/index/announcement-2.jpg")?>" width="100%" class="event1-pic">

                </div>-->
                <div class="col-md-12 text-center view-more-container">
                    <a href='../updates/announcements.php' class="view-more">View More</a>
                </div>
            </div>
            <div class="row calendar-section">
                <div class="col-md-12">
                    <h3 class="list-of-events-heading text-center">School Calendar</h3>
                    <h4 class="list-of-events-sub-heading text-center">March</h4>
                    <div class="container-fluid sc-outer-container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 text-center sc-container">

                                <p class="sc-day">4-8</p>
                                <p class="sc-month">MAR</p>

                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 text-center sc-description-container">
                                <p class="sc-description" >Preschool 4th Quarter Skills Assessment </p>
                            </div>  
                        </div>
                    </div>
                    <div class="container-fluid sc-outer-container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 text-center sc-container">

                                <p class="sc-day">4-6</p>
                                <p class="sc-month">MAR</p>

                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 text-center sc-description-container">
                                <p class="sc-description">Grade 6 4th Quarter Examination</p>
                            </div>  
                        </div>
                    </div>
                    <div class="container-fluid sc-outer-container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 text-center sc-container">

                                <p class="sc-day">13-15</p>
                                <p class="sc-month">MAR</p>

                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 text-center sc-description-container">
                                <p class="sc-description" >Gradeschool Honors- 4th Quarter Examination </p>
                            </div>  
                        </div>
                    </div>
                    <div class="container-fluid sc-outer-container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 text-center sc-container">

                                <p class="sc-day">16</p>
                                <p class="sc-month">MAR</p>

                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 text-center sc-description-container">
                                <p class="sc-description" > Nursery and Kinder 1 Moving Up Ceremony </p>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-12 text-center view-more-container">
                        <a href='../about-us/monthlycalendar.php' class="view-more">View More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 right-section">
            <div class="container-fluid news-outer-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="rs-main-heading-container">
                            <h1 class="rs-main-heading">News</h1>
                            <hr>
                        </div>
                        <div class="row">
                            <?php 

                            $homepageNews = new WP_Query(array( 
                                'posts_per_page' => 2,  
                                'post_type' => 'news',
                            ));/* custom queries */

                         while($homepageNews->have_posts()) {
                             $homepageNews->the_post();
                            ?>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 news-container" style="margin-bottom: 5%;">

                                <a href='../updates/announcements-article-1.php'><img src="<?php echo get_theme_file_uri("/images/news/Graduates%20Batch%202.jpg")?>" class="news1-img" style="width: 100%; margin-bottom: 5%;"></a>
                                <div class="desc-heading-container dhc-mobile">
                                    <a href='../updates/announcements-article-1.php'> <p class="desc-heading text-center"><?php the_title(); ?><br><span class="subtitle">The Isidorean 2019 Commencement Exercises</span></p></a>
                                </div>
                                <p class='news-desc'>
                                    <?php the_content(); ?>
                                    <!--Isidore de Seville Integrated School holds its 12th Commencement Exercises on the 23rd of March, 2019 at Hiyas Malolos Convention Center with a blast as thirty graduates burst to their emotions and teachers stand proud of their accomplishments. 
                                    Together with the teachers’ dedication during rehearsals, the then candidates forgraduation successfully prepared a simple surprise gift for their parents, a letter of appreciation and gratitude for the hard work and sacrifice that finally paid-off. A roller coaster of emotions radiate within the school premise.	 
                                    “This is one of my bitter-sweet memories,” said Krizzel Ann Jelaine R. Mañago of 6- ...
                                    -->
                                </p>

                            </div>
                             <?php 
                                }//end of while loop
                              ?>
                           <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 news-container" style="margin-bottom: 5%;">

                                <a href='../updates/announcements-article-2.php'> <img src="<?php echo get_theme_file_uri("images/news/thumb-crae.jpg")?>" class="news1-img" style="width: 100%; margin-bottom: 5%;"></a>
                                <div class="desc-heading-container dhc-mobile">
                                    <a href='../updates/announcements-article-2.php'> <p class="desc-heading text-center">Keepin’ Head Above Water, Feet Still on the Ground.</p></a>
                                </div>
                                <p class='news-desc'>
                                    Over 10,000 young athletes from all over the region participated in the 2019 Central Luzon Regional Athletic Association (CLRAA) Meet held at the Zambales Sports Complex in Iba, Zambales last February 3-8, 2019. This year’s event was hosted by the Provincial Government of Zambales and Department of Education Schools Division of Zambales. The annual regional sporting event with the theme “Sports: Building Character, Shaping Dreams” aimed to develop among the student-athletes discipline, cooperation, sportsmanship, and camaraderie. The athletes from 18 school divisions in Central Luzon of the six-day sports meet sought to represent the region in the... 
                                </p>
                            </div>-->
                        </div>
                        <div class="row margin-bottom">
                            <div class="col-md-12 text-center btn-container-discover-more">
                                <a class="btn-discover-more-news" href='../updates/news.php'>Discover More</a>
                            </div>
                        </div>
                        <div class="row margin-bottom">
                            <div class="col-md-12 banner-style">
                                <div class="rs-main-heading-container">
                                    <h1 class="rs-main-heading">Testimonials</h1>
                                    <hr>
                                </div>
                                <div class="container-fluid banner-style">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="<?php echo get_theme_file_uri("/images/testimonials/2.png")?>" class="custom img-responsive" alt='testimonials 1'>
                                        </div>
                                        <div class="col-md-6">
                                            <blockquote>
                                                <span class="leftq quotes">&ldquo;</span><p class="fernan-content">My family will always continue to regard Isidore de Seville as the prime learning institution that molds every child into becoming a bright and loving individual of the world.<a class="link1" href="testimonials3.php">Read more...</a></p><span class="rightq quotes">&bdquo; </span>
                                                <footer class="blockquote-footer1">Daddy Fernan and Mommy Janet dela Cruz with daughters Chelsea and Chantelle </footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row margin-bottom">
                            <div class="col-md-12 text-center btn-container-discover-more">
                                <a class="btn-discover-more-testimonials" href='../updates/testimonials.php'>Discover More</a>
                            </div>
                        </div>
                        <div class="row margin-bottom">
                            <div class="col-md-12">
                                <img src="<?php echo get_theme_file_uri("/images/index/footer.png")?>" class="footer-img-thumb">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>  