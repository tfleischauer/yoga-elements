<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
  <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' &raquo; '; } ?><?php echo get_bloginfo('name') . ' &raquo; ' . get_bloginfo('description'); ?></title>

  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css' />

  <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> -->

  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/smartmenu.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fix.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-2.css" type="text/css" />

  <?php wp_enqueue_script('jquery'); ?>

  <?php wp_head(); ?>

  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/smartmenu.js"></script>
  <script type="text/javascript">
      jQuery(window).ready(function(){
          jQuery("#navigation").Smartmenu({animationDuration: 350});
      });
      jQuery(window).load(function(){
  	    //jQuery(".navbar-header button").trigger("click");
      })
  </script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
</head>

<body>
  <div class="container wrapper">
    <div class="header row">

        <div class="logo col-md-3 col-sm-3">
            <a href="<?php echo get_home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-yoga-elements-200x80px.jpg" alt="YOGA Elements" title="YOGA Elements" width="200" height="80" />
            </a>
        </div>

        <div class="col-md-5 col-sm-4"></div>
        <div class="col-md-4 col-sm-5">

            <div class="icon">
                <a href="https://www.facebook.com/YogaElementsStudio" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon.gif" alt="Facebook" title="Facebook" width="32" height="30" />
                </a>
            </div> <!-- end .icon -->

            <div class="top_nav">
                <a href="./newsletter" title="Sign up for Newsletter">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/nl.gif" alt="Newsletter" title="Newsletter" width="41" height="30" />
                        <span>Sign up for Newsletter</span>
                </a>
            </div> <!-- end .top_nav -->
        </div> <!-- end .col-md-4 .col-sm-5 -->
      </div> <!-- end .header .row -->

  <div class="row" style="margin-bottom: 10px;">
      <div class="col-md-12" style="padding: 0;">
              <div class="main_nav">
                <div id="navigation" class="smartmenu navbar-default">

                    <div class="navbar-header">
                      <button type="button" 
                      	class="navbar-toggle collapsed" 
                        data-toggle="collapse" 
                        data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                     </div> <!-- end .navbar-header -->

                    <div class="collapse navbar-collapse in" id="bs-example-navbar-collapse-1">
                        <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => '' ) ); ?>
                    </div> <!-- end .collapse .navbar-collapse .in -->

                  </div> <!-- end #navigation -->
              </div> <!-- end .main-nav -->
      </div> <!-- end .col-md-12 -->
  </div> <!-- end .row -->

<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery("#bs-example-navbar-collapse-1 ul").addClass("nav navbar-nav");
	})
</script>
