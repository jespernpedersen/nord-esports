<?php 
/*
Template Name: Events
Template Post Type: page
*/


get_header();
?>

<!-- Content -->
<main>

    <!-- Featured Event -->


    <!-- All Events -->

    <!-- Query Info: 
        Category
        Title
        Date
        Button Link to Facebook
        Image
    -->
<?php 

    $posts = get_posts( array(
        'post_type'      => 'event',
        'order'          => 'ASC',
        'orderby'        => 'meta_value',
        'meta_key'       => 'event_date',
        'meta_type'      => 'DATETIME',
    ));

    if( $posts ) {
        foreach( $posts as $post ) {
            // Do something.
            // print_r($post);

            // Category
            print_r(get_the_category($post->ID)[0]->slug);

            echo "<br />";

            // Title
            echo get_the_title($post->ID);

            echo "<br />";

            // Date
            echo get_field("event_date");

            
            echo "<br />";

            // Button Link to Facebook
            echo get_field("event_link");

            echo "<br />";

            echo get_the_post_thumbnail_url($post->ID);
        }
    }


?>
</main>


<?php
get_footer();