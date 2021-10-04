<?php
/*
* This is our first theme.
*/
get_header();
?>
        
       <div class="home-main">
           <div class="custom-header">
               <img src="<?php header_image(); ?>" width="<?php echo absint(get_custom_header()->width) ?>" width="<?php echo absint(get_custom_header()->height) ?>" class="img-fluid">
           </div>
           <div class="row mr-0 ml-0">
            <div class="home-posts col-lg-8 col-xs-12">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article class="home-post">
                            <div class="post-header">
                                <div class="post-thumbnail row ml-0 mr-0">
                                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('home-featured') ?></a>
                                </div>
                                <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                            </div>
                            <div class="post-description">
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="post-footer row ml-0 mr-0">
                                <div class="post-meta">
                                    <strong>Author: </strong> <?php the_author(); ?>
                                </div>
                                <div class="post-meta">
                                    <strong>Posted on: </strong> <?php the_time(); ?>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                <?php endif; ?>
                <div class="pagination row ml-0 mr-0">
                    <?php echo paginate_links() ?>
                </div>
                
            </div>
            <div class="home-sidebar col-lg-4 col-xs-12 pl-0 pr-0">
                <?php get_sidebar(); ?>
            </div>
           </div>
           
       </div>
        

<?php 
get_footer();
?>
    
