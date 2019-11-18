<?php 
/*
Template Name: Coach
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
<main class="coach">
    <?php 
        $posts = get_posts( array(
            'post_type'      => 'game',
            'order'          => 'DESC',
        ));
        if( $posts ) {
            foreach( $posts as $post ) {
                ?>
                
                <?php if (get_field("coach_activate") == 1)  {
                ?>
                <section class="team">
                    <div class="event-wrapper">
                        <div class="event-bg-image overlay overlay-game <?php echo get_field("teams_game") ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID);  ?>')">
                            <div class="xs-container">
                                <div class="text-wrapper">
                                    <h2><?php echo get_the_title($post->ID) ?></h2>
                                </div>
                                <div class="cta-wrapper">
                                    <?php if (get_field("coach_activate") == 1)  {
                                        ?>
                                            <a href="void:()" class="btn beginner-btn" title="Click here to join the Beginner Team">I Want To Coach This Game</a>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <?php 
                                if (get_field("coach_activate") == 1)  {
                                    $cf_shortcode = get_field("coach_cf_shortcode");
                                ?>
                                    <div class="modal beginner">
                                        <div class="modal-inner">
                                            <?php echo do_shortcode($cf_shortcode) ?>
                                        </div>                                     
                                        <a href="void:()" class="close-btn">X</a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </section>
                <?php
                }
            }
        }
        ?> 
</main>
<div class="modal-master">
    <div class="container">
        <?php 
            $posts = get_posts( array(
                'p'              => 224, // ID of a page, post, or custom type            
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
        
        <a href="void:()" class="btn close-master" title="Jeg har forstået betingelserne">Forstået! Fortsæt til kontaktform </a>
        </div>
    </div>
    <a href="void:()" class="close-btn">X</a>
</div>
<?php

get_footer();