<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ritacasagrande
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside class="blog-sidebar col-md-3 col-md-pull-8">
   <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- /.blog-sidebar -->