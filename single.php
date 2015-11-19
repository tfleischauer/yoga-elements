<?php
    get_header();
?>
<!-- single.php -->
<div class="row">
<div class="home_content col-md-12">
<?php
	// Add in page logic via the loop
	if (have_posts()) :
		while (have_posts()) : the_post();

		$post_id = get_the_ID(); 

	//	the_title();
		
?>
	<?php the_content(); ?>
<?
		endwhile;
	endif;
?>
</div>
</div>
<?php
    get_footer();
?>