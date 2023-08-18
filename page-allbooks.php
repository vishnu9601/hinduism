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
    echo '<tr><th>Title</th><th>PDF Link</th></tr>';

    while ( $query->have_posts() ) {
        $query->the_post();
        $pdf_url = wp_get_attachment_url();
        $title = get_the_title();

        echo '<tr>';
        echo '<td>' . esc_html( $title ) . '</td>';
        echo '<td><a href="' . esc_url( $pdf_url ) . '">Download PDF</a></td>';
        echo '</tr>';
    }

    echo '</table>';

    wp_reset_postdata(); // Reset the post data after the loop
} else {
    echo 'No PDF attachments found.';
}
// Restore original post data.
wp_reset_postdata();


 get_footer();
?>