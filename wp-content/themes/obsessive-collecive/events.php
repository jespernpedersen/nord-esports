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

    <?php 

    $posts = get_posts( array(
        'post_type'      => 'event',
        'order'          => 'DESC',
        'orderby'        => 'meta_value',
        'meta_key'       => 'is_post_featured',
    ));

    if( $posts ) {
        foreach( $posts as $post ) {
            // Do something.
            // print_r($post);
            // Category

            echo "FEATURED!!! <br />"; 
            echo get_the_category($post->ID)[0]->slug;
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
            // Get Image URL
            echo get_the_post_thumbnail_url($post->ID);
        }
    }


    ?>

    <!-- All Events -->

    <!-- Query Info: 
        Category
        Title
        Date
        Button Link to Facebook
        Image

        Should sort by date first
    -->
<?php 

    $posts = get_posts( array(
        'post_type'      => 'event',
        'order'          => 'DESC',
        'orderby'        => 'meta_value',
        'meta_key'       => 'event_date',
        'meta_type'      => 'DATETIME',
    ));

    if( $posts ) {
        foreach( $posts as $post ) {
            // Do something.
            // print_r($post);

            $meta_posts = get_post_meta($post->ID);

            $is_post_featured = $meta_posts["is_post_featured"][0];


            if($is_post_featured != 1) {
            print_r(get_post_meta($post->ID["is_post_featured"]));

            // Category
            echo get_the_category($post->ID)[0]->slug;
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
            // Get Image URL
            echo get_the_post_thumbnail_url($post->ID);
            }
            else {

            }
        }
    }


?>
</main>


<?php
get_footer();