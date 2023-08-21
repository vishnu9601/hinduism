<?php 
 get_header();
$args = array(
    'post_type'      => 'attachment',    // Retrieve attachments
    'post_mime_type' => 'application/pdf', // Filter by PDF mime type
    'post_status'    => 'inherit',       // Include only attached files
    'posts_per_page' => -1,              // Retrieve all attachments
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) {
    echo '<table>';
    echo '<tr><th>Title</th><th>PDF Link</th><th>Description</th></tr>';

    while ( $query->have_posts() ) {
        $query->the_post();
        $pdf_url = wp_get_attachment_url();
        $title = get_the_title();

        echo '<tr>';
        echo '<td>' . esc_html( $title ) . '</td>';
        echo '<td><a href="' . esc_url( $pdf_url ) .get_the_content() . wp_get_attachment_caption() . '">Download PDF</a></td>';
        echo '</tr>';

       
  
    }
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


    

    