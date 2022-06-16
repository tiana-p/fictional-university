<?php 

add_action('rest_api_init', 'universityRegisterSearch');

function universityRegisterSearch(){
    // takes three arguments - namespace, routes(ending part of the url), array of what should happen when you visit the url
    register_rest_route('university/v1', 'search', array(
        'method' => WP_REST_SERVER::READABLE,
        'callback' => 'universitySearchResults'
    ));
}

function universitySearchResults(){
    return 'Congratulations, you created a route.';
}
