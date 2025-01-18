<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable = no">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="description" content="Maria Rita Casagrande - Full Stack Developer">

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
	<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"
		type='text/css'>
	<!-- Main styles -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css"
		media="all" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css"
		media="all" />

	<?php wp_head(); ?>
</head>

<?php
// Definimos variáveis "padrão"
$body_class = 'portfolio-page fltrs-fx-fade fltrs-scale';
$data_page = 'portfolio';

// Se for single de post do blog
if (is_singular('post')) {
	$body_class = 'blog-left-sidebar single-post big-heading top-page compact-menu-enabled';
	$data_page = 'singleBlogPage';

	// Se for single de project (seu CPT de portfólio)
} elseif (is_singular('project')) {
	$body_class = 'portfolio-single';
	$data_page = 'singleProjectPage';
}
// Se não for nenhuma das opções acima, mantém o padrão.

?>

<body class="<?php echo esc_attr($body_class); ?>" data-page="<?php echo esc_attr($data_page); ?>">
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
							'theme_location' => 'primary', // 
							'container' => false,
							'menu_class' => 'nav navbar-nav',
							'fallback_cb' => false,
							'walker' => new Custom_Nav_Walker(),
						));
						?>
					</div>
				</nav> <!-- ./Main navigation -->
			</div>

		</header>