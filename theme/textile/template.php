<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } 
	Innovation_Settings();
	include('header.php'); 
	include('top.php'); 
?>
	<div class="wrapper clearfix">
		<article>
			<section>
				<h1><?php get_page_title(); ?></h1>
				<?php get_page_content(); ?>
			</section>
		</article>
		<?php include('sidebar.php'); ?>
	</div>
<?php include('footer.php'); ?>
