<?php get_header(); ?>

<!-- index.php -->

<!-- START CONTENT -->
<h2 id="page-title"><?php wp_title(''); ?></h2>

<div class="content">

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); // start the loop ?> 

<!--<article class="col-md-9">-->
<article>
	<div class="inner_content post-box clear-fix">

        <h2>
        	<a href="<?php the_permalink(); // link to the page or posting ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
            	<?php the_title(); // get the page title or posting title ?>&nbsp;&raquo;
            </a>
        </h2>
          
            <p class="postmetadata">
                <!--<span class="date">Posted on--> <?php /* the_time('F jS, Y') */ ?><!--</span> in--> 
                <!--<span class="cat">--><?php /* the_category(', ') */ ?><!--</span>-->
                <span class="author"><?php _e('By');?> <?php the_author_posts_link(); ?></span>
                <?php /*?><span class="comments">with <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span><?php */?>
            </p>
            <?php /* the_content('More &raquo;'); // get the page or posting written content */ ?>
            <a href="<?php the_permalink(); // link to the page or posting ?>">
				<?php the_post_thumbnail( 'thumbnail' ); ?>
            </a>
            <?php the_excerpt(); // get the posting's excerpt ?>
            <p class="read-more"><a href="<?php the_permalink(); // link to the page or posting ?>">Read More</a></p>
            <?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
            
    </div> <!-- end .inner_content .post-box .clear-fix -->

</article>

<?php endwhile; endif; // end the loop ?>

<nav class="post-nav">
    <p class="alignleft"><?php next_posts_link('&laquo; Older Posts') ?></p>
    <p class="alignright"><?php previous_posts_link('Newer Posts &raquo;') ?></p>
</nav>

<!--<div class="delimiter"></div>-->

</div> <!-- END .content -->

<?php get_sidebar('primary'); ?>

<?php get_footer(); ?>
