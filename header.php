<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<title><?php wp_title('|', true, 'right'); ?></title>

	<!-- Favicon -->
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700%7CWork+Sans:200,400,300,500'
		rel='stylesheet'>

	<!-- Styles -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="header" class="container-fluid">
		<div class="container">
			<nav class="navbar">
				<div class="navbar-header">
					<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse"
						class="navbar-toggle collapsed" type="button"><span></span></button>
					<!-- Logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" width="27"
								height="45" alt="<?php bloginfo('name'); ?>">
						</a>
					</div>
				</div>
				<!-- Main navigation -->
				<div class="collapse navbar-collapse" id="navbar">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'primary', // Local do menu
						'container' => false,
						'menu_class' => 'nav navbar-nav',
						'fallback_cb' => false,
						'walker' => new Custom_Nav_Walker(), // Adiciona o Walker personalizado
					));
					?>
				</div>


				<!-- ./Main navigation -->
			</nav>
		</div>
	</header>