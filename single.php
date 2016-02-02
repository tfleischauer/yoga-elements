<?php get_header(); ?>

<!-- single.php -->

<?php
	// Add in page logic via the loop
	if (have_posts()) :
		while (have_posts()) : the_post();	
?>

	<article id="post-<?php the_ID(); ?>" class="post">
    	<h2 id="page-title"><?php the_title(); ?></h2>
        <p class="postmetadata">
                <span class="author"><?php _e('By');?> <?php the_author_posts_link(); ?></span>
        </p>
        
        <div class="col-sm-12 col-md-9 home_content content single">
        
            <figure class="featured-img-plus-caption">
                <?php the_post_thumbnail( 'large' ); // the featured image ?>
                <figcaption>
                    <?php  echo wpautop( get_post_thumbnail_caption() ); // gets the caption for featured image  ?>
                </figcaption>
            </figure>
            
            <?php /* echo get_the_post_thumbnail($page->ID, 'large'); */ // Mike Sinkula's code ?>
            
            <?php the_content(); ?>
            <? endwhile; endif; ?>
	
		</div> <!-- end .col-sm-12 .col-md-9 .home_content .content .single -->
	</article>
<?php get_sidebar('primary'); ?>

<?php get_footer(); ?>
