<?
/****************************************************
*
* @File: 		template.php
* @Package:		iGetSimple | www.get-simple.info
* @Action:		iPhone template for GetSimple
* @Created by:	Eddyfever | www.ieddy.nl | thnx to: Zegnåt
* @Version:	    BETA 1.0
*
*****************************************************/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php get_page_clean_title(); ?> | <?php get_site_name(); ?>, <?php get_component('tagline'); ?></title>
<link href="<?php get_theme_url(); ?>/images/homescreen.png" rel="apple-touch-icon" />
<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/main.css" />

<?php get_header(); ?>
<meta name="robots" content="index, follow" />

<script src='<?php get_theme_url(); ?>/scripts/jquery-1.3.2.min.js' type="text/javascript"></script>
<script src='<?php get_theme_url(); ?>/scripts/class.horinaja.jquery.js' type='text/javascript'></script>

<!-- 100% width in vertical and horizontal on iphone -->
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">

<!-- If using the horizontal slider pagination -->
<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/horinaja.css" type="text/css" media="screen" />


<!-- script for menu -->
<script type="text/javascript">
//<![CDATA[
function ShowHide(){
$("#menubox").animate({"height": "toggle"}, { duration: 1000 });
}
//]]>
</script>
<!-- end script for menu -->

<!-- Horizontal slider (<li> elements in #featured will slide horizontal) -->
<script> $(document).ready(function(){
$('#featured').Horinaja({
capture:'featured',delai:0.3,
duree:5,pagination:false});
});
</script>
<!-- end Horizontal slider -->
</head>

<body>
<!-- Begin Wrapper -->
<div id="wrapper">
   
         <!-- Begin Header -->
         <div id="header">
		 
		  <div id="titlebox">
		   <div class="contentin"> 
		    <a class="logo" href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a>
		     <p class="tagline"><?php get_component('tagline'); ?></p>
		   </div>
		  </div>
		 
         <div id="menu" ><a onclick="ShowHide(); return false;" href="#">
         <img src="<?php get_theme_url(); ?>/images/menu.png" alt="menu" width="" height="" align="middle"/></a>
         </div> 
			  
		 </div>
		 <!-- End Header -->
		 
		 
		 <!-- Begin menubox -->
		 <div id="menubox">
		  <ul>
		   <?php get_navigation(return_page_slug()); ?>
		   <div id="closebox"><a onclick="ShowHide(); return false;" href="#">
		   <img src="<?php get_theme_url(); ?>/images/close.png" alt="close" width="" height=""/></a></div>
		  </ul>
		 </div>
		 <!-- End menubox -->
		 
		 
		 <!-- Begin Content -->
		 <div id="content">
		 <!-- .contentin is for padding the text and images -->
		  <div class="contentin">      
	       <h1><?php get_page_title(); ?></h1><br>
	        <p><?php get_page_content(); ?></p>
		     <div class="date"><small><?php get_page_url(); ?><br>Saved <?php get_page_date(); ?></small>
		     </div><br>
		  </div>
		 
		 </div>
		 <!-- End Content -->
		 
		 <!-- Begin sidebar (is called sidebar because of the normal deafault GetSimple Theme and component -->
		 <div id="sidebar">
		  <div class="contentin">
		   <?php get_component('sidebar'); ?>
		  </div>
		 </div>
		 <!-- End sidebar -->
		 
		 
		 <!-- Begin Footer, Link us back would be nice ;)-->
		 <div id="footer">
          <p><?php get_site_name(); ?> | <?php get_site_credits(); ?> |
           <br> iGetSimple theme by: <a href="http://www.ieddy.nl/getsimple" target="_blank">ieddy.nl</a>		
         </div>
		 <!-- End Footer -->
		 
</div>
<!-- End Wrapper -->
   
</body>
</html>
