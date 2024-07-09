<?php get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php
            // Start the loop
            while (have_posts()) :
                the_post();

                // Display the page content
                the_content();

            endwhile;
            ?>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>