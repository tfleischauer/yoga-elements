<?php
    get_header();
?>
<!-- page.php -->
<div class="row">
	<div class="inner_content col-md-12">
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
<script type="text/javascript">
	jQuery(document).ready(function(){
		if(jQuery(window).width()>=992){
			var thumbH = jQuery(".thumb_common").height();
			jQuery(".thumb_common .thumb-child").each(function(){
				jQuery(this).css({height: thumbH});
			})
		}
	})
</script>