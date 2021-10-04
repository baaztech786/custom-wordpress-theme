<?php
/*
* This template is used display single posts
*/
get_header();
?>
    <div class="post-container">
        
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="post-image">
                <?php the_post_thumbnail('home-featured') ?>
            </div>
            <div class="post-title">
                <h1><?php the_title() ?></h1>
            </div>
            <div class="post-meta-row">
                <div class="post-meta">
                    <strong>Author: </strong> <?php the_author(); ?>
                </div>
                <div class="post-meta">
                    <strong>Posted on: </strong> <?php the_time(); ?>
                </div>
            </div>
            <div class="post-content">
                <?php the_content() ?>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
        

<?php 
get_footer();
?>

