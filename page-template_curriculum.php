<?php
/*
Template Name: Curriculum
*/
?>
<?php
    get_header();
?>
<!-- page template_curriculum.php -->
<div class="row">
<div class="inner_content col-md-12">

<?php

	print_class_schedule_menu();

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