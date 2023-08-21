<?php
add_action('wp_enqueue_scripts', 'hinduism_enqueue_style');
function hinduism_enqueue_style() {
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . 'assets/mystyle.css');
    wp_enqueue_script('child-js',get_stylesheet_directory_uri() . 'assets/myscript.js');
}



//Adarsh code 1

//function get_attachement_details ($attachment_id){
//    $attachment_details = array();

//    return $attachment_details;
    
//}


// Adarsh code 2
function get_attachement_details ($attachment_id){
    $attachment_details = array();
   $attachment_details['id'] = $attachment_id;
    $attachment_details['description'] = get_the_content( $attachment_id ); 
    return $attachment_details;
    
}
