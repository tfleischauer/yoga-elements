<!-- sidebar-primary.php -->

<aside class="col-sm-12 col-md-3 col-med-offset-9 sidebar-primary">

<?php if ( is_active_sidebar( 'primary' ) ) : ?>
  <?php dynamic_sidebar( 'primary' ); ?>

    <?php else : ?>  

	<!-- Create some custom HTML or call the_widget().  It's up to you. -->

    <?php endif; ?>  

</aside> 

