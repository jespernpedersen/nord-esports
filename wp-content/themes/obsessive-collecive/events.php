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
            ?>
            <section class="featured-event">
                <div class="event-wrapper">
                    <div class="event-bg-image overlay overlay-game <?php echo get_the_category($post->ID)[0]->slug; ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID);  ?>')">
                        <h3><?php echo get_the_category($post->ID)[0]->name; ?></h3>
                        <h2><?php echo get_the_title($post->ID) . ' ' . get_field("event_date"); ?> </h2>
                        <a href="<?php echo get_field("event_link"); ?>" class="btn small-btn" title="Attend this event">Attend</a>
                    </div>
                </div>
            </section>
            <?php
        }
    }
    ?>

    <div class="container">
    <!-- All Events -->

    <!-- Query Info: 
        Category
        Title
        Date
        Button Link to Facebook
        Image

        Should sort by date first
    -->

    <div class="all-events">
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
                $meta_posts = get_post_meta($post->ID);

                $is_post_featured = $meta_posts["is_post_featured"][0];


                if($is_post_featured != 1) {
                    ?>
                        <!-- Frontend View -->
                        <div class="event-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID); ?>') ;">
                            <!-- Category -->
                            <h3><?php echo get_the_category($post->ID)[0]->name; ?></h3>
                            <!-- Date -->
                            <span><?php echo get_field("event_date"); ?></span>
                            <!-- Title -->
                            <h2><?php echo get_the_title($post->ID); ?></h2>
                            <!-- Button Link to Facebook -->
                            <a href="<?php echo get_field("event_link"); ?>" class="btn" title="Attend this event">Attend</a>
                        </div>
                    <?php
                }
                else {
                    // Empty
                }
            }
        }
    ?>
    </div><!-- end all-events -->
</main>


<?php
get_footer();