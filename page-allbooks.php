<?php 
 get_header();

 $args = array(
    // What is this p ? you requirement is to find attachment post type having mimetype pdf
    'p' => '49',

);

// Custom query.

$query = new WP_Query( $p);

// Check that we have query results.

if ( $query->have_posts() ) {

    // Start looping over the query results.

    while ( $query->have_posts() ) {
        // You have called the_post but not printing anything before loop end. How would you know query is correct
        $query->the_post();

        // Contents of the queried post results go here.

    }

}

// Restore original post data.
wp_reset_postdata();


 get_footer();
?>
