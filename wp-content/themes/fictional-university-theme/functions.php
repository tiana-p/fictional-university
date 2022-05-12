<?php

function fictional_university_files(){
    //load css style sheet
    wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
}
// wp_enqueue_scripts is an example of a hook
add_action('wp_enqueue_scripts', 'fictional_university_files');