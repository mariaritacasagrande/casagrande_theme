<!DOCTYPE html>
<html lang="en">

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
		href="<?php echo get_template_directory_uri(); ?><?php echo get_template_directory_uri(); ?>/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152"
		href="<?php echo get_template_directory_uri(); ?><?php echo get_template_directory_uri(); ?>/apple-touch-icon-152x152.png" />
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

<body class="portfolio-page fltrs-fx-fade fltrs-scale" data-page="portfolio">
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
							<a href="index.html"><img
									srcset="<?php echo get_template_directory_uri(); ?>/images/logo@2x.png 2x"
									src="<?php echo get_template_directory_uri(); ?>/images/logo.png" width="45"
									height="69" alt="Maria Rita Casagrande - Full Stack Developer"></a>
						</div>
					</div>
					<!-- Main navigation -->
					<div class="collapse navbar-collapse" id="navbar">


						<?php
						$menu_name = 'main_nav';
						$locations = get_nav_menu_locations();
						$menu = wp_get_nav_menu_object($locations[$menu_name]);
						$menuitems = wp_get_nav_menu_items($menu->term_id, array('order' => 'DESC'));
						?>

						<nav>
							<ul class="nav navbar-nav">

								<li class="item">
									<a href="<?php echo $link; ?>" class="title">
										<?php echo $title; ?>
									</a>

							</ul>
						</nav>



						<!-- <php? 
							$menus=wp_get_nav_menus(); foreach ( $menus as $menu /** @var WP_Term $menu */ ) 
							{
							$menu_items=wp_get_nav_menu_items( $menu->term_id );
							if ( ! empty( $menu_items ) ) {
							echo '<ul class="nav navbar-nav">';
								foreach ( $menu_items as $menu_item ) {
								echo '<li><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
								}
								echo '</ul>';
							}
							}
							?> -->
					</div>
				</nav> <!-- ./Main navigation -->
			</div>

		</header>