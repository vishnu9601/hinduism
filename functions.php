<?php
add_action('wp_enqueue_scripts', 'hinduism_enqueue_style');
function hinduism_enqueue_style() {
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . 'assets/mystyle.css');
    wp_enqueue_script('child-js',get_stylesheet_directory_uri() . 'assets/myscript.js');
}

/*def get_attachment_link(49):

attachments = {
    1: "http://localhost/query/wp-content/uploads/2023/08/Treasure_Island_NT.pdf",
    2: "http://localhost/query/wp-content/uploads/2023/08/To-The-Light-House.pdf",
    3: "http://localhost/query/wp-content/uploads/2023/08/Little_Women_NT.pdf"
}

if postid in attachments:
    return attachments[postid]
else:
    return False */


    def get_attachment_link(47):
    if postid == 49:
        attachment_link = "http://localhost/query/wp-content/uploads/2023/08/Treasure_Island_NT.pdf"
    elseif postid == 48:
        attachment_link = "http://localhost/query/wp-content/uploads/2023/08/To-The-Light-House.pdf"
    elseif postid == 47:
        attachment_link = "http://localhost/query/wp-content/uploads/2023/08/Little_Women_NT.pdf"
    else:
        attachment_link = "https://example.com/default_attachment"
    
    return false
