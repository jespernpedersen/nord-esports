<?php 
/*
Template Name: Full-width layout
Template Post Type: post, page, event
*/


get_header();
?>

<!-- Content -->
<main>
    <!-- Become A Player / Become A Coach -->
    <section class="players-coach">
        <div class="inner-wrapper">
            <section class="player overlay overlay-primary">
                <div class="container">
                    <div class="inner">
                        <h2><?php echo get_field("player_title") ?></h2>
                        <p><?php echo get_field("player_paragraph_content") ?></p>
                        <a class="btn primary" href="<?php echo get_field("player_button__link") ?>" title=""><?php echo get_field("player_button_text") ?></a>
                    </div>
                </div>
            </section>
            <section class="coach overlay overlay-secondary">
                <div class="container">
                    <div class="inner">
                        <h2><?php echo get_field("coach_title") ?></h2>
                        <p><?php echo get_field("coach_paragraph_content") ?></p>                        
                        <a class="btn primary" href="<?php echo get_field("coach_button__link") ?>" title=""><?php echo get_field("coach_button_text") ?></a>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- About -->
    <section class="about">
        <div class="container">
            <div class="column">
                <h2><?php echo get_field("about_title") ?></h2>                     
                <?php echo get_field("about_paragraph_content"); ?>
                <a class="btn grey-btn" href="<?php echo get_field("about_readmore_button_link") ?>" title="Her kan du læse mere om hvem vi er"><?php echo get_field("about_readmore_button_text") ?></a>
                <a class="btn secondary-btn"  href="<?php echo get_field("about_contact_button_link") ?>" title="Her kan du kontakte os hvis du har spørgsmål"><?php echo get_field("about_contact_button_text") ?></a>
            </div>
            <div class="column">
                <img src="<?php echo get_field("about_image")["url"] ?>" title="<?php echo get_field("about_image")["alt"] ?>" alt="<?php echo get_field("about_image")["caption"] ?>" />
            </div>
        </div>
    </section>
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
        wp_reset_query();
    }
    ?>
    <!-- Blog -->
    <section class="blog">
        <div class="container">
            <h2><?php echo get_field("blog_title") ?></h2>   
            <div class="grid-layout layout-3">
            <?php 
                $posts = get_posts( array(
                    'post_type'      => 'post',
                    'order'          => 'DESC',
                ));
                
                if( $posts ) {
                    foreach( $posts as $post ) {
                        ?>                  
                        <div class="blog-item">
                            <div class="bg-image overlay overlay-primary-small" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID);  ?>') ">
                                <div class="overlay-content">
                                    <h3><?php echo get_the_title(); ?></h3>
                                    <p> <?php echo get_the_excerpt($post->ID); ?></p>
                                    <a href="<?php echo get_permalink($post->ID); ?>" class="btn" title="">Read More</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    wp_reset_query();
                }
            ?>
            </div>
        </div>
    </section>
    <!-- Discord -->
    <section class="discord">
        <div class="container">
            <h2><?php echo get_field("discord_pretitle") ?></h2>
            <a href="<?php echo get_field("discord_link") ?>" title="Join our Discord here" target="_blank">
                <img src="/nord-esports/wp-content/uploads/2019/11/Discord-LogoWordmark-Color.png" alt="Discord Logo" title="Join our Discord here" />
            </a>
        </div>
    </section>
    <!-- Twitch / YouTube -->
    <section class="video-platforms">
        <div class="container">
            <div class="twitch">
                <iframe
                    src="https://player.twitch.tv/?channel=<?php echo get_field("twitch_channel") ?>&muted=true&autoplay=false"
                    height="<height>"
                    width="<width>"
                    frameborder="<frameborder>"
                    scrolling="<scrolling>"
                    allowfullscreen="<allowfullscreen>">
                </iframe>         
            </div><!-- .twitch end -->
            <div class="youtube-embed">
            <iframe id="ytplayer" type="text/html" width="100%" height="100%"
            src="https://www.youtube.com/embed/<?php echo get_field("youtube_video") ?>"
            frameborder="0"></iframe>
            </div>
        </div>
    </section>
    <!-- Sponsors -->
    <section class="sponsors">
        <div class="container">
            <div class="sponsor-gallery">
                <?php echo do_shortcode('[gallery category="8"]') ?>        
            </div>
        </div>
    </section>
</main>


<?php
get_footer();