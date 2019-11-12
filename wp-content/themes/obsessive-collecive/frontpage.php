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
                <h2>About</h2>                        
                <p>Marzipan candy canes apple pie croissant dessert gummies pastry jelly. Jelly-o cheesecake caramels. Wafer liquorice chocolate lemon drops apple pie gummi bears. Biscuit chocolate bar marzipan chocolate bar pastry marzipan topping.</p>
                <p>Jelly-o sweet roll tootsie roll cheesecake. Lemon drops toffee halvah. Soufflé dessert pie gummies danish dessert chocolate cake gummi bears. Tootsie roll donut marzipan wafer topping cupcake.</p><p>Macaroon lemon drops donut. Macaroon bear claw jelly-o jelly-o sweet lemon drops. Gingerbread caramels macaroon apple pie dessert sweet soufflé sweet roll.</p>
                <p>Sweet sweet pudding bear claw marzipan lemon drops sweet roll gummi bears jelly. Gingerbread lemon drops chocolate cake gummi bears. Topping cotton candy cake wafer pudding sweet roll pie toffee sweet roll.  </p>
                <a class="btn grey-btn" href="#" title="">Read More</a><a class="btn secondary-btn" href="#" title="">Contact Us</a>
            </div>
            <div class="column">
                <img src="/nord-esports/wp-content/uploads/2019/11/about1.jpg" title="" alt="" />
            </div>
        </div>
    </section>
    <!-- Featured Event -->
    <section class="featured-event">
        <div class="event-wrapper">
            <div class="event-bg-image overlay overlay-lol-game" style="background-image: url('/nord-esports/wp-content/uploads/2019/11/1_ZF-E6Z4iLzCGwtavfPRp6g.png')">
                <h3>League of Legends</h3>
                <h2>TOMORROW 13. FRIDAY</h3>
                <a href="#" class="btn small-btn" title="Attend this event">Attend</a>
            </div>
        </div>
    </section>
    <!-- Blog -->
    <section class="blog">
        <div class="container">
            <h2>Blog</h2>
            <div class="grid-layout layout-3">
                <div class="blog-item">
                    <div class="bg-image overlay overlay-primary-small" style="background-image: url('/nord-esports/wp-content/uploads/2019/11/blogfrontpage1.jpg') ">
                        <div class="overlay-content">
                            <h3>Title</h3>
                            <p>Jelly beans dragée tiramisu macaroon candy chocolate bar. Biscuit cheesecake halvah. Lemon drops fruitcake donut apple pie candy marzipan marzipan sesame snaps toffee.</p>
                            <a href="#" class="btn" title="">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="bg-image overlay overlay-primary-small" style="background-image: url('/nord-esports/wp-content/uploads/2019/11/blogfrontpage2.jpg') ">
                        <div class="overlay-content">
                            <h3>Title</h3>
                            <p>Jelly beans dragée tiramisu macaroon candy chocolate bar. Biscuit cheesecake halvah. Lemon drops fruitcake donut apple pie candy marzipan marzipan sesame snaps toffee.</p>
                            <a href="#" class="btn" title="">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="bg-image overlay overlay-primary-small" style="background-image: url('/nord-esports/wp-content/uploads/2019/11/blogfrontpage3.jpg') ">
                        <div class="overlay-content">
                            <h3>Title</h3>
                            <p>Jelly beans dragée tiramisu macaroon candy chocolate bar. Biscuit cheesecake halvah. Lemon drops fruitcake donut apple pie candy marzipan marzipan sesame snaps toffee.</p>
                            <a href="#" class="btn" title="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Discord -->
    <section class="discord">
        <div class="container">
            <h2>Join us on</h2>
            <a href="https://discordapp.com/invite/mzs9AeW" title="Join our Discord here" target="_blank">
                <img src="/nord-esports/wp-content/uploads/2019/11/Discord-LogoWordmark-Color.png" alt="Discord Logo" title="Join our Discord here" />
            </a>
        </div>
    </section>
    <!-- Twitch / YouTube -->
    <section class="video-platforms">
        <div class="container">
            <div class="twitch">
                <iframe
                    src="https://player.twitch.tv/?channel=monstercat&muted=true&autoplay=false"
                    height="<height>"
                    width="<width>"
                    frameborder="<frameborder>"
                    scrolling="<scrolling>"
                    allowfullscreen="<allowfullscreen>">
                </iframe>         
            </div><!-- .twitch end -->
            <div class="youtube-embed">
            <iframe id="ytplayer" type="text/html" width="100%" height="100%"
            src="https://www.youtube.com/embed/NBsCzN-jfvA"
            frameborder="0"></iframe>
            </div>
        </div>
    </section>
    <!-- Sponsors -->
    <section class="sponsors">
        <div class="container">
            <div class="sponsor-gallery">
                <img src="/nord-esports/wp-content/uploads/2019/11/lundsauto.png" alt="" title="" />
                <img src="/nord-esports/wp-content/uploads/2019/11/hilden.png" alt="" title="" />
                <img src="/nord-esports/wp-content/uploads/2019/11/adenait.png" alt="" title="" />
                <img src="/nord-esports/wp-content/uploads/2019/11/superbrugsen.png" alt="" title="" />
                <img src="/nord-esports/wp-content/uploads/2019/11/kk.png" alt="" title="" />  
                <img src="/nord-esports/wp-content/uploads/2019/11/microbizz.png" alt="" title="" />         
            </div>
        </div>
    </section>
</main>


<?php
get_footer();