<?php
/**
 * Template Name: My Custom Post
 * Template Post Type: post
 */
get_header(); ?>

<main id="main">
<div id="the-post" class="container">
    
    <?php 
    if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
        the_title();
        the_content();
        comments_template();
        the_post_navigation();
    endwhile;
endif;
?>

<?php get_sidebar(); ?>
			</div>

		
			
			<!-- Go top button/arrow -->
			<a href="#wrapper" class="btn-top go js-link"><i class="arrow right-arrow"></i></a>
			
		</main>
		
<?php get_footer(); ?>