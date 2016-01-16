<?php get_header(); ?>

<!-- single.php -->

<!--<div class="row"> -->
<!--<div class="home_content col-md-12">-->
<div class="content home_content single">
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
        <figure class="featured-img-plus-caption">
			<?php the_post_thumbnail( 'large' ); // the featured image ?>
        	<figcaption>
				<?php  echo wpautop( get_post_thumbnail_caption() ); // gets the caption for featured image  ?>
            </figcaption>
        </figure>
        
        <?php /* echo get_the_post_thumbnail($page->ID, 'large'); */ // Mike Sinkula's code ?>
        
		<?php the_content(); ?>
		<? endwhile; endif; ?>
	</article>
</div> <!-- end content -->
<!--</div>--> <!-- end .home_content .col-md-12 -->
<!--</div>--> <!-- end .row --> 
<?php
    get_footer();
?>
