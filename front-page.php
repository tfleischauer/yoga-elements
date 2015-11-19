<?php
    get_header();
?>
<!-- front-page.php -->
<!--<div class="slider">
	<div class="slide_banner"><a href="/intro-offer/"><img src="<?php echo get_template_directory_uri(); ?>/images/banner.png" alt="Get Started" width="247" height="325" /></a></div>
	<?php nivo_slider(58); // Use an ID ?>
</div>-->



<!--
<div class="row slider">
	<div class="col-md-12">
	<div class="col-md-9" style="padding:0;"><?php nivo_slider(58); // Use an ID ?></div>
	<div class="col-md-3 top-banner" style="padding: 0;"><a href="/intro-offer/"><img src="<?php echo get_template_directory_uri(); ?>/images/banner.png" alt="Get Started" /></a></div>
	</div>
</div>
-->

<div class="row">
	<div class="col-md-12 home_content">
		<div class="top-slider" style="padding: 0; overflow: visible;"><?php nivo_slider(58); // Use an ID ?></div>
		<div class="top-banner" style="padding: 0;">
			<a href="/intro-offer/">
				<img src="<?php echo get_template_directory_uri(); ?>/images/banner.png" alt="Get Started" />
			</a>
		</div>
		<script type="text/javascript">
			jQuery(window).load(function(){
				jQuery(".top-slider .nivoSlider").css({
					width : 'auto',
					//height:'auto'
					});
				jQuery(".top-slider .nivoSlider img").css({
					width : '100%',
					height: 'auto'
				})
				if(jQuery("window").width() < 990){
					jQuery(".top-slider .nivoSlider").removeAttr("style");
				}
			})
		</script>
	<div class="clear"></div>
	
	<?php while ( have_posts() ) : the_post(); ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
		<!-- #post -->
	<?php endwhile; // end of the loop. ?>
	
</div>
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
</div>
<div class="row">
<div class="thumb_common col-md-12">
<?php	
	}

	endforeach
?>
</div>
</div>
<?php
    get_footer();
?>
<script type="text/javascript">
	jQuery(document).ready(function(){
		if(jQuery(window).width()>=992){
			var thumbH = jQuery(".thumb_common").height();
			jQuery(".thumb_common .thumb-child").each(function(){
				jQuery(this).css({height: thumbH});
			})
			/*
var bannerH = jQuery(".top-banner").height();
			jQuery(".top-slider .nivoSlider").css({
				height : bannerH + "!important"
			})
*/
		}
		
	})
</script>