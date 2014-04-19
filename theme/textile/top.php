<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } ?>

<body id="<?php get_page_slug(); ?>" >
	<?php include('social.php'); ?>
    <div id="feedback"></div>
	<header>
		<div class="header">
			<div class="wrapper">
                <div id="logo">
                    <a href="/">Студия текстильного дизайна</a><br />
                    <a href="/" class="logored">TextileCom</a><br />
                    <a href="/">Стильно - текстильно!</a>
                </div>
				<nav id="main-nav">
					<ul><?php get_navigation(get_page_slug(FALSE)); ?></ul>
				</nav>
			</div>
		</div>
    </header>
