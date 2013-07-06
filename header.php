<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" dir="ltr" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" dir="ltr" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" dir="ltr" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" dir="ltr" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" dir="ltr" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	
	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="title" content="<?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	
  <meta name="google-site-verification" content="b5dN8rBgur611QwfC_xhY-b02O-urXjLS5NwIdG_Ghs" />
	<meta name="Copyright" content="Copyright <?php bloginfo('name'); ?> <?php echo date("Y"); ?> All Rights Reserved.">
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/_/img/apple-touch-icon.png">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/_/css/main.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/_/css/responsive.css">
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	
</head>

<body id='top' <?php body_class(); ?>>
	
		<header id="header">
		
			<div class="navbar navbar-fixed-top">
	      <div class="navbar-inner">
	        <div class="container-fluid">
	        	<a href='#top'><img class='logo' src='<?php bloginfo('template_directory'); ?>/_/img/svg/logo.svg'></a>
	        	<a class='brand' href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></a>
	          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </a>
	          
	          <?php wp_nav_menu(array('theme_location' => 'primary-menu', 'container' => 'nav', 'container_class' => 'nav-collapse', 'menu_class' => 'nav pull-right', 'fallback_cb' => '', 'walker' => new Walker_Nav_Menu_Bootstrap)); ?>
	          

			      
	        </div>
	      </div>
	    </div>

	  </header>

		

