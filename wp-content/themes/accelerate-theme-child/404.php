<?php
/**
 * The template for displaying 404 page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content error-content">
		<div class="main-content error-page" role="main">
            <figure>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/404-map.png"/>
            </figure>
            <div class="error-text-wrapper">
                <h1>Whoops, Took a Wrong Turn...</h1>
                <p>Sorry, this page no longer exists, never existed or has been moved. We feel like complete jerks for totally misleading you. </p>

                <p>Feel free to take a look around our <a href="<?php echo site_url('/blog/') ?>">blog</a> or some of our featured <a href="<?php echo site_url('/work/') ?>">work</a>. </p>
            </div>

		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
