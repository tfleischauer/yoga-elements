<!--<div class="row">-->
<!--<aside id="sidebar-primary">-->
<!--<aside class="sidebar-primary col-xs-pull-3">-->
<!--<aside id="sidebar-primary" class="col-md-2">-->
<aside id="sidebar-primary">

<!--<div class="col-md-3 col-md-offset-8">-->

<?php if ( is_active_sidebar( 'primary' ) ) : ?>
  <?php dynamic_sidebar( 'primary' ); ?>

    <?php else : ?>  

	<!-- Create some custom HTML or call the_widget().  It's up to you. -->

    <?php endif; ?>  

<!--</div> -->

</aside>
<!--</div>-->