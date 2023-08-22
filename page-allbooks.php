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
        $caption = wp_get_attachment_caption();
        $desc = get_the_content();
        echo '<tr>';
        echo '<td>' . esc_html( $title ) . '<br>' . $caption . '</td>';
        echo '<td><a href="' . esc_url( $pdf_url ) . '">Download PDF</a></td>';
        echo '<td>' .  $desc . '</td>';
        echo '</tr>';
    }
}

    

    