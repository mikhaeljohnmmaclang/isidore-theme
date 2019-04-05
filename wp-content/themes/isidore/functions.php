<?php 

function university_files() {
    wp_enqueue_script('jquery',"//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js", NULL , microtime(), true);
    wp_enqueue_script('bootstrap',"//maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js", NULL , microtime(), true);
    //1st paramater is just a nickname
    //2nd parameter is file path
    //3rd parameter is wordpress is checking if the js file have dependencies
    //4th parameter is a php function that allows to load the js file in website without refreshing the cache
    //5th parameter is checking if u want to load the js file in the bottom before the body tag
    wp_enqueue_style('bootstrap','//maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'); 
    wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); 
    wp_enqueue_style('university_main_style',get_stylesheet_uri(),'NULL',microtime()); 
    wp_enqueue_style('blur',get_theme_file_uri("/css/facilities/img-blur.css"),'NULL',microtime()); 
    wp_enqueue_style('index-css',get_theme_file_uri("/css/index.css"),'NULL',microtime()); 
    //1st parameter is just a nickname
    //2nd parameter is wp code for getting the css
}

add_action('wp_enqueue_scripts','university_files');
//add action is just calling the function

function university_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location'); 
    register_nav_menu('footerLocationOne', 'Footer Location One'); 
    register_nav_menu('footerLocationTwo', 'Footer Location Two'); 
    //regiter menus
    //the first parameter is the nickname
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails'); //featured image
}

add_action('after_setup_theme','university_features'); 

 
?>