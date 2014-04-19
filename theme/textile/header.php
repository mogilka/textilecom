<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" > <!--<![endif]-->
<head>
<meta charset="utf-8">
    <?php if ('gallery' == $_REQUEST['id']): ?>
        <title><?php echo getGalleryTitle($_REQUEST['name']); ?> &raquo; <?php get_site_name(); ?> &raquo; <?php get_i18n_component('tagline'); ?></title>
    <?php else: ?>
        <title><?php get_page_clean_title(); ?> &raquo; <?php get_site_name(); ?> &raquo; <?php get_i18n_component('tagline'); ?></title>
    <?php endif; ?>
    
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
	<meta name="robots" content="index, follow">
    <link rel="icon" type="image/png" href="/favicon.png">
	<link href='//fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
	<link href="<?php get_theme_url(); ?>/assets/css/reset.css" rel="stylesheet">
	<link href="<?php get_theme_url(); ?>/style.css?v=<?php echo get_site_version(); ?>" rel="stylesheet">
	
	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]--> 
	
	<!--[if lt IE 7 ]>
    <script src="<?php get_theme_url(); ?>/assets/js/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
  <![endif]-->

	<?php get_header(); ?>
    <script type="text/javascript" src="<?php get_theme_url(); ?>/js/lib.js"></script>
    
    <script type="text/javascript" src="<?php get_theme_url(); ?>/cloud-carousel/cloud-carousel.min.js"></script>
    <script type="text/javascript" src="<?php get_theme_url(); ?>/cloud-carousel/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="<?php get_theme_url(); ?>/cloud-carousel/slimbox.js"></script>
	<link href="<?php get_theme_url(); ?>/cloud-carousel/carousel.css" rel="stylesheet">
	<link href="<?php get_theme_url(); ?>/cloud-carousel/slimbox.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" media="screen, projection" href="<?php get_theme_url(); ?>/cssnicemenu/style.css" />
	<script type="text/javascript" src="<?php get_theme_url(); ?>/cssnicemenu/jquery.color.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('nav ul li a').hover(
				function() {
					$(this).css('padding', '5px 15px')
						 .animate({'paddingLeft'	: '25px', 
									 'paddingRight'	: '25px', 
								 'backgroundColor':'rgba(153,0,51,0.9)'}, 
										 'slow');
				}, 
				function() {
					$(this).css('padding', '5px 25px')
						 .animate({'paddingLeft'	: '15px', 
					 			'paddingRight'		: '15px', 
					 			'backgroundColor' :'rgba(153,0,51,0.8)'}, 
							 			'slow');
			}).mousedown(function() {
				$(this).animate({'backgroundColor': 'rgba(153,0,51,0.7)'}, 'fast');
			}).mouseup(function() {
				$(this).animate({'backgroundColor': 'rgba(153,0,51,0.9)'}, 'fast');
			});
		});
	</script>

    <link href="http://stg.odnoklassniki.ru/share/odkl_share.css" rel="stylesheet" />
	<script src="http://stg.odnoklassniki.ru/share/odkl_share.js" type="text/javascript" ></script>
    <script type="text/javascript" src="//vk.com/js/api/openapi.js?78"></script>
    <script type="text/javascript">VK.init({apiId: 3400499, onlyWidgets: true});</script>
</head>
