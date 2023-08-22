<?php
global $post;
$download_link = wp_get_attachment_url();
$current_attachment_type = wp_check_filetype($download_link);
if($current_attachment_type['ext']==='pdf'){
    get_header();

    $book_name= get_field('book_name');
    $language= get_field('language');
    $writer= get_field('writer');
    $publication= get_field('publication');

    $download_button = '<a href="'. $download_link .'"><button class="">Download</button></a>';
    $content = '<div>' . get_the_content() . '</div>';
    $vishnu = '<div class="wrap" style="height: 100vh;display: flex;flex-direction: column;align-items: center;width: 100%;justify-content: center;"><h1>' . $book_name . '</h1>'. $content . $download_button . '</div>';
    echo $vishnu;
    echo $language;
    echo $writer;
    echo $publication;
    comments_template();
    get_footer();

    //Write Code for comment Box
}
else {
    wp_redirect( home_url() );
    exit;

}


