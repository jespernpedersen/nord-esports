<?php 


get_header();
?>
<!-- Content -->

<main class="<?php echo get_field("theme") ?>">


    <!-- Page Header -->
    <header class="page-header overlay" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>)'">
        <h1><?php echo get_the_title(); ?></h1>
    </header>

    <!-- Content -->
    <div id="page-content">
        <div class="container">
            <?php echo get_the_content(); ?>
        </div>
    </div>
</main>


<?php
get_footer();