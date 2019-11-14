<?php 
/*
Template Name: Player
Template Post Type: post, page, event
*/


get_header();
?>

<!-- Content -->


        <!-- Team -->
            <!-- Title -->
            <!-- Player Paragraph Text -->
            <!-- Coach Paragraph Text -->

            <!-- Modal Window for Levels of Teams -->
<main>
    <?php 
        $posts = get_posts( array(
            'post_type'      => 'game',
            'order'          => 'DESC',
        ));
        if( $posts ) {
            foreach( $posts as $post ) {
                ?>
                <section class="team">
                    <div class="event-wrapper">
                        <div class="event-bg-image overlay overlay-game <?php echo get_field("teams_game") ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID);  ?>')">
                            <div class="xs-container">
                                <div class="text-wrapper">
                                    <h2><?php echo get_the_title($post->ID) ?></h2>
                                    <p><?php echo get_field("player_paragraph_text") ?></p>
                                </div>
                                <div class="cta-wrapper">
                                    <?php if (get_field("beginner_activate") == 1)  {
                                        ?>
                                            <a href="#" class="btn" title="Click here to join the Beginner Team">Beginner</a>
                                        <?php
                                    }
                                    ?>
                                    <a href="#" class="btn" title="Click here to join the Intermediate Team">Intermediate</a>
                                </div>
                                <?php 
                                if (get_field("beginner_activate") == 1)  {
                                    $shortcode = get_field("beginner_contact_form_shortcode");
                                ?>
                                    <div class="modal">
                                        <div class="modal-inner">
                                            <?php echo do_shortcode($shortcode) ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </section>
                <?php
            }
        }
        ?> 
</main>
<div class="modal-master">
    <div class="container">
        <?php 
            $posts = get_posts( array(
                'p'              => 186, // ID of a page, post, or custom type            
                'post_type'      => 'page',
                'order'          => 'DESC',
            ));
            ?>    <!-- Page Header -->
            <div class="modal-header <?php echo get_field("theme", $posts[0]->ID) ?>"><header class="page-header overlay " style="background-image: url('<?php echo get_the_post_thumbnail_url($posts[0]->ID) ?>)'">
                <h1><?php echo get_the_title($posts[0]->ID); ?></h1>
            </header>
            </div>
        <div class="terms-and-conditions">
            <?php echo $posts[0]->post_content;
        ?>
        
        <a href="void:()" class="btn close-master" title="Jeg har forstået betingelserne">Forstået! Fortsæt til tilmeldingen…</a>
        </div>
    </div>
    <a href="void:()" class="close-btn">X</a>
</div>
<?php

get_footer();