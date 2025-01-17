<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable = no">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="description" content="Maria Rita Casagrande - Full Stack Developer">
	<!-- Twitter Cards -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@ritacasagrande" />
	<meta name="twitter:creator" content="@ritacasagrande" />
	<!-- Open Graph | Facebook & Google Plus -->
	<meta property="og:title" content="Maria Rita Casagrande - Full Stack Developer">
	<meta property="og:url" content="https://ritacasagrande.com">
	<meta property="og:description" content="Maria Rita Casagrande - Full Stack Developer">
	<meta property="og:image"
		content="https://image-tf.s3.envato.com/files/194471742/screenshots/00-buro-cover-tf.__large_preview.png">
	<meta property="og:image:width" content="600">
	<meta property="og:image:height" content="315">
	<meta property="og:type" content="website">

	<title>Maria Rita Casagrande - Full Stack Developer</title>

	<!-- Favicon -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144"
		href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152"
		href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-152x152.png" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png"
		sizes="32x32" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png"
		sizes="16x16" />
	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700%7CWork+Sans:200,400,300,500'
		rel='stylesheet' type='text/css'>
	<!-- Main styles -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css"
		media="all" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css"
		media="all" />

	<?php wp_head(); ?>
</head>

<!-- Body classes:  -->
<!-- "fltrs-scale": adds the scale effect when filtering grid items -->
<!-- "fltrs-fx-fade" adds the semi-transparent overlay when filtering -->
<!-- "fltrs-fx-curtain" adds the curtain effect overlay when filtering -->
<!-- notice that in case you want to add any effect, you will need to choose -->
<!-- from one or another. Both filters could cause unexpected behaviors -->




<body class="<?php
if (is_single()) {
	echo 'blog-left-sidebar single-post big-heading top-page compact-menu-enabled';
} else {
	echo 'portfolio-page fltrs-fx-fade fltrs-scale';
}
?>" data-page="<?php
if (is_single()) {
	echo 'singleBlogPage';
} else {
	echo 'portfolio';
}
?>">
	<!-- Preloader -->
	<div id="preloader">
		<span class="preloader-ani"></span>
	</div>

	<div id="wrapper">
		<!-- Head, logo & navigation -->
		<header id="header" class="container-fluid">
			<div class="container">
				<nav class="navbar">
					<div class="navbar-header">
						<button aria-controls="navbar" aria-expanded="false" data-target="#navbar"
							data-toggle="collapse" class="navbar-toggle collapsed" type="button"><span></span></button>
						<!-- Logo -->
						<div class="logo">
							<!-- When you will add your own logo, make sure to add your logo´s width and height sizes -->
							<!-- Adding retina/HDPi support is so easy as adding a double sized image within the srcset attribute with the '2x' descriptor. -->
							<!-- The src attribute will display the regular size logo -->
							<a href="<?php echo get_site_url(); ?>"><img
									srcset="<?php echo get_template_directory_uri(); ?>/images/logo@2x.png 2x"
									src="<?php echo get_template_directory_uri(); ?>/images/logo.png" width="45"
									height="69" alt="Maria Rita Casagrande - Full Stack Developer"></a>
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
				</nav> <!-- ./Main navigation -->
			</div>

		</header>