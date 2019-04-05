<?php

get_header();

while(have_posts()) {

    the_post(); ?>

<!--html starts here-->
<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg')?>);"></div>
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title() ?></h1>
        <div class="page-banner__intro">
            <p>DONT FORGET TO REPLACE ME LATER</p>
        </div>
    </div>  
</div>

<div class="container container--narrow page-section">

    <?php 
        $theParent = wp_get_post_parent_id(get_the_ID()); //get the ID of parent's page
    if($theParent) {
        //this if statement check if the current page is a child page
        //if this page is a parent page, this will return 0 else it will return the ID of the current page
    ?>
    <!--html starts here-->
    <div class="metabox metabox--position-up metabox--with-home-link">
        <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
    </div>

    <?php }   ?>

    <?php 
    $testArray = get_pages(array(
        'child_of' => get_the_ID(),
    )); // this will return all pages if pages is a parent or a child
    
    if ($theParent or $testArray ) { ?>
    
    
    <div class="page-links">
        <h2 class="page-links__title"><a href="<?php echo the_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></h2>
        <ul class="min-list">
            <?php
                if($theParent){
                    $findChildrenOf = $theParent;
                } else {
                    $findChildrenOf = get_the_ID();
                }
    
                wp_list_pages(array(
                    'title_li' => NULL, //I dont want to display 'pages' title in webpage
                    'child_of' => $findChildrenOf,
                ));
            ?>
        </ul>
    </div>
    
    <?php 
                } //END
    ?>

    <div class="generic-content">
        <?php the_content(); ?>
    </div>

</div>


<?php }


get_footer();

?>