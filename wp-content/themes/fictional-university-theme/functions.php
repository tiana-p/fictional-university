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
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerLocationOne', 'Footer Location One');
    register_nav_menu('footerLocationTwo', 'Footer Location Two');
    add_theme_support('title-tag');
}
 
add_action('after_setup_theme', 'univsersity_features');

function univsersity_adjust_queries($query){
    if (!is_admin() AND is_post_type_archive('program') AND is_main_query()){
      $query->set('orderby', 'title');
      $query->set('order', 'ASC');
      $query->set('posts_per_page', -1);
    }
    if (!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()){
    $today = date('Ymd');
    $query->set('meta_key', 'event_date');
    $query->set('orderby', 'meta_value_num');
    $query->set('order', 'ASC');
    $query->set('meta_query', array(
        array(
          'key' => 'event_date',
          'compare' => '>=',
          'value' => $today,
          'type' => 'numberic'
        )
      ));
   }
}
add_action('pre_get_posts', 'univsersity_adjust_queries');

