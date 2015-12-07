<?php get_header(); ?>

<!-- single.php -->

<div class="row">
<div class="home_content col-md-12">
<div class="content">
<?php
	// Add in page logic via the loop
	if (have_posts()) :
		while (have_posts()) : the_post();

		/* $post_id = get_the_ID(); */

	//	the_title();
		
?>
	<article id="post-<?php the_ID(); ?>" class="post">
    	<h2><?php the_title(); ?></h2>
		<?php the_post_thumbnail( 'large' ); // the featured image ?>
		<?php the_content(); ?>
		<? endwhile; endif; ?>
	</article>
</div> <!-- end content -->
</div>
</div>
<?php
    get_footer();
?>