<?php
global $post;
$download_link = wp_get_attachment_url();
$current_attachment_type = wp_check_filetype($download_link);
if($current_attachment_type['ext']==='pdf'){
    get_header();
    $download_button = '<a href="'. $download_link .'"><button class="">Download</button></a>';
    $content = '<div>' . get_the_content() . '</div>';
    $vishnu = '<div class="wrap" style="height: 100vh;display: flex;flex-direction: column;align-items: center;width: 100%;justify-content: center;"><h1>' . get_the_title() . '</h1>'. $content . $download_button . '</div>';
    echo $vishnu;
    comments_template();
    get_footer();

    //Write Code for comment Box
}
else {
    wp_redirect( home_url() );
    exit;

}



// $box = '<div style="width: 100%;display: flex;">
//     <div style="width: 50%;">
//         <h1>' . 
//         get_the_title() . '
//         </h1>
//         <p>'
//          . get_the_content().   
//         '</p>
//     </div style="width: 50%;">
//         <button> Download  </button>
//     <div>
//     </div>
// </div>' ;
// echo $box;
?>


