<?php
/*
* This template is used to display about us page
* Template Name: Homepage Template
*/
get_header();
?>
        <div class="page-custom-header">
            <?php $img_url = get_the_post_thumbnail_url(get_the_ID(), 'full') ?>
            <img src="<?php echo $img_url ?>" alt="<?php echo get_the_title() ?>" class="img-fluid">
        </div>
        <div class="flex-row ml-0 mr-0 mt-3 text-center">
            <div class="home-main-content">
                <h1>WHO WE ARE</h1>
                <p>
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <p><?php the_content(); ?></p>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </p>
                
            </div>
        </div>
        <div class="home-services row ml-0 mr-0 mt-5">
            <?php 
            $args = array (
                'post_type'   => 'service',
                'posts_per_page' => 3,
                'order'     => 'ASC'
            );
            $tech_posts = new WP_Query( $args );
            if ( $tech_posts->have_posts() ) : ?>
                <?php while ( $tech_posts->have_posts() ) : $tech_posts->the_post(); ?>
                <div class="home-service-col col-4">
                    <div class="service-thumb col-12">
                        <?php the_post_thumbnail('medium', array('class' => 'rounded')) ?>
                    </div>
                    <div class="service-title col-12">
                        <h3><a href="<?php echo get_the_permalink(get_the_ID()) ?>"><?php the_title() ?></a></h3>
                        <p><?php the_excerpt() ?></p>
                    </div>
                </div>
                    
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <div class="home-carousel row ml-0 mr-0 mt-5">
            <div class="owl-carousel">
            <?php 
            $args = array (
                'post_type'   => 'project',
                'posts_per_page' => 10,
                'order'     => 'ASC'
            );
            $tech_posts = new WP_Query( $args );
            if ( $tech_posts->have_posts() ) : ?>
                <?php while ( $tech_posts->have_posts() ) : $tech_posts->the_post(); ?>
                <div>
                    <?php $project_url = get_post_meta( get_the_ID(), 'typeyoururl_21100', true ) ?>
                    <a href="<?php echo $project_url ?>" target="_blank"><?php the_post_thumbnail( 'medium' ) ?></a>
                </div>
                    
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            </div>
        </div>
        <div class="home-posts row ml-0 mr-0 mt-5 pr-0">
            <div class="col pl-0">
                <div class="section-head"><h3><?php echo get_theme_mod('wplearning_featured_block_1', 'Latest From Technology') ?></h3></div>
                <div class="section-content pt-4">
                    <?php 
                    $args = array (
                        'cat'   => 4,
                        'posts_per_page' => 3
                    );
                    $tech_posts = new WP_Query( $args );
                    if ( $tech_posts->have_posts() ) : ?>
                        <?php while ( $tech_posts->have_posts() ) : $tech_posts->the_post(); ?>
                        <div class="home-post-row row ml-0 mr-0 mb-3">
                            <div class="post-thumb col-3 pl-0">
                                <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid')) ?>
                            </div>
                            <div class="post-title col-9">
                                <h3><a href="<?php echo get_the_permalink(get_the_ID()) ?>"><?php the_title() ?></a></h3>
                                <p><?php the_excerpt() ?></p>
                            </div>
                        </div>
                            
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
            <div class="col pr-0">
                <div class="section-head"><h3>Latest from Social Media</h3></div>
                <div class="section-content pt-4">
                    <?php 
                    $args = array (
                        'cat'   => 5,
                        'posts_per_page' => 3
                    );
                    $tech_posts = new WP_Query( $args );
                    if ( $tech_posts->have_posts() ) : ?>
                        <?php while ( $tech_posts->have_posts() ) : $tech_posts->the_post(); ?>
                        <div class="home-post-row row ml-0 mr-0 mb-3">
                            <div class="post-thumb col-3 pl-0">
                                <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid')) ?>
                            </div>
                            <div class="post-title col-9">
                                <h3><a href="<?php echo get_the_permalink(get_the_ID()) ?>"><?php the_title() ?></a></h3>
                                <p><?php the_excerpt() ?></p>
                            </div>
                        </div>
                            
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
            
        </div>
        

<?php 
get_footer();
?>

