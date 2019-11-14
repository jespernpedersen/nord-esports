<?php 
/*
Template Name: Schedule
Template Post Type: post, page, event
*/


get_header();
?>
<main>
    <!-- Page Header -->
    <header class="page-header overlay" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>)'">
        <h1><?php echo get_the_title(); ?></h1>
    </header>


    <div class="container">
        <?php echo do_shortcode("[weekly-schedule schedule=1]"); ?>
    </div>
</main>
<?php

get_footer();