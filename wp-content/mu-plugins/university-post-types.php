<?php


function university_post_types(){
    register_post_type('announcement', array(
        'supports' => array('title','editor', 'excerpt','thumbnail'),
        'rewrite' => array('slug' => 'announcement'), //change the slug to plural 'event' to 'events'
        'has_archive' => true, //if you want an archive
        'public' => true, 
        'labels' => array(
            'name'=>'Announcements',
            'add_new_item' => 'Add New Announcement',
            'edit_item' => 'Edit Announcement',
            'singular_name' => 'Announcement',
        ), //customize in wp admin
        'menu_icon' => 'dashicons-megaphone',//icon
    ));
    register_post_type('news', array(
        'supports' => array('title','editor', 'excerpt'),
        'rewrite' => array('slug' => 'news'), //change the slug to plural 'event' to 'events'
        'has_archive' => true, //if you want an archive
        'public' => true, 
        'labels' => array(
            'name'=>'News',
            'add_new_item' => 'Add New News',
            'edit_item' => 'Edit News',
            'singular_name' => 'News',
        ), //customize in wp admin
        'menu_icon' => 'dashicons-clipboard',//icon
    ));
}

add_action('init', 'university_post_types'); //creating custom post types ( adding menu on the left side of wp)


