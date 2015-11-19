<?php
    get_header();
?>
<!-- page203.php -->
<div class="row">
<div class="inner_content col-md-12">
<?php

	print_class_schedule_menu();

	// Add in page logic via the loop
	if (have_posts()) :
		while (have_posts()) : the_post();

		$post_id = get_the_ID(); 

		//	the_title();
		
		$page_content = get_the_content();
		
?>
</div>
<!--end inner_content1-->
</div>



<div class="row">
	<div class="thumb_common col-md-12">
<?php

	//	LIST POSTS FOR UPCOMING EVENTS CATEGORY

	$args = array(
		'numberposts' => -1,
		'order' => 'DESC',
		'order_by' => 'date',
		'category' => 4
	);
	
	$upcoming_events = get_posts($args);
	$total_items = count($upcoming_events);
	$total_counter = 0;
	$row_counter = 0;
	
	foreach($upcoming_events as $post) : setup_postdata($post);
	
		$total_counter++;
		$row_counter++;
	
?>
	<div class="col-md-4 thumb-child <?php echo 'thumbnail_part' . $row_counter; ?>">
		<p><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('upcoming-events-thumb'); ?></a></p>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<?php the_excerpt(); ?>
	</div>
<?php

	if (($row_counter == 3) && ($total_counter != $total_items))
	{
		$row_counter = 0;
?>

</div>
<div class="thumb_common col-md-12">
<?php	
	}

	endforeach

?>
</div>
</div>



<div class="inner_content">
	<?php echo $page_content; ?>
<?
		endwhile;
	endif;
?>
</div>
<!--end inner_content2-->
<?php
    get_footer();
?>