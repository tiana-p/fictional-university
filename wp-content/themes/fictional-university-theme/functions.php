<?php

function fictional_university_files(){

    // JS File requires few arguments. File url, any js library, version, and will the file load in the header/footer
    wp_enqueue_script('main-uni-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    //load css style sheet
    
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
}
// wp_enqueue_scripts is an example of a hook
add_action('wp_enqueue_scripts', 'fictional_university_files');

function univsersity_features(){
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'univsersity_features');