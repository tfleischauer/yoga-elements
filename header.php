<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css' />
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' &raquo; '; } ?><?php echo get_bloginfo('name') . ' &raquo; ' . get_bloginfo('description'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/smartmenu.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fix.css" type="text/css" />
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
	
    	<div class="logo col-md-3 col-sm-3"><a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.gif" alt="YOGA Elements Studio" width="207" title="YOGA Elements Studio" height="80" /></a></div>
    	<div class="col-md-5 col-sm-4"></div>
    	<div class="col-md-4 col-sm-5">
	    	<div class="icon"><a href="https://www.facebook.com/YogaElementsStudio" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icon.gif" alt="Facebook" title="Facebook" width="32" height="30" /></a></div>
			<div class="top_nav"><a href="./newsletter" title="Sign up for Newsletter"><img src="<?php echo get_template_directory_uri(); ?>/images/nl.gif" alt="Newsletter" title="Newsletter" width="41" height="30" /><span>Sign up for Newsletter</span></a></div>
    	</div>
</div>
<div class="row" style="margin-bottom: 10px;">
	<div class="col-md-12" style="padding: 0;">
			<div class="main_nav">
	        <div id="navigation" class="smartmenu navbar-default">
		        <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			    </div>
			    <div class="collapse navbar-collapse in" id="bs-example-navbar-collapse-1">
		        	<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => '' ) ); ?>
			    </div>
		    </div>
	    </div>
		</div>
</div>
<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery("#bs-example-navbar-collapse-1 ul").addClass("nav navbar-nav");
	})
</script>