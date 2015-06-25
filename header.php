<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<link rel="Shortcut Icon" type="image/ico" href="images/favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  
	<title><?php wp_title(); ?></title>
  
	<!-- CSS _____________________________________________-->
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/icomoon.css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/magnificpopup.css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" media="screen" />  

	<!-- Fixing Internet Explorer ______________________________________-->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie.css" />
	<![endif]-->
<?php wp_head(); ?>
</head>
<?php flush(); ?>
<body>
	<div class="loadreveal"></div>
	<div id="loadscreen"><div id="loader"><span></span></div></div>

	<header role="banner" id="header">
		<div class="wrapper">
			<div itemscope itemtype="http://schema.org/Organization" id="logo">
				<a itemprop="url" href="<?php bloginfo('url'); ?>" rel="home"><img itemprop="logo" src="<?php bloginfo('template_directory'); ?>/imgs/logo.png" alt="<?php bloginfo('name'); ?> logo" /></a>
			</div>
			<nav id="mainmenu" role="navigation">
				<div id="menu-burger"><i class="icon-menu"></i></div>
				<?php get_search_form(); ?>
                <div id="menu">
					<?php wp_nav_menu(); ?>
				</div>
			</nav>
		</div> <!-- END .wrapper -->
	</header>