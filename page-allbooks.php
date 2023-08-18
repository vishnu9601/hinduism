<?php 
 get_header();

 $args = array(

    'p' => '49',

);

// Custom query.

$query = new WP_Query( $p);

// Check that we have query results.

if ( $query->have_posts() ) {

    // Start looping over the query results.

    while ( $query->have_posts() ) {

        $query->the_post();

        // Contents of the queried post results go here.

    }

}

// Restore original post data.

wp_reset_postdata();


 get_footer();
?>
