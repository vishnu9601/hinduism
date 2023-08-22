<?php
add_action('wp_enqueue_scripts', 'hinduism_enqueue_style');
function hinduism_enqueue_style() {
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . 'assets/mystyle.css');
    wp_enqueue_script('child-js',get_stylesheet_directory_uri() . 'assets/myscript.js');
}
    
    