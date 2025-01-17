<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="header" class="container-fluid">
		<div class="container">
			<nav class="navbar">
				<div class="navbar-header">
					<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse"
						class="navbar-toggle collapsed" type="button">
						<span></span>
					</button>
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"
								alt="<?php bloginfo('name'); ?>">
						</a>
					</div>
				</div>
				<div class="collapse navbar-collapse" id="navbar">
					<?php
					wp_nav_menu([
						'theme_location' => 'main-menu',
						'container' => false,
						'menu_class' => 'nav navbar-nav',
					]);
					?>
				</div>
			</nav>
		</div>
	</header>