<?php
/**
 * The template for displaying the about page
 *
 * 
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="about-header">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; // end of the loop. ?>
		<!-- .main-content -->

	</div><!-- #primary -->
    
    <section class="services">
        <div class="services-wrapper">
            <ul class="about-services">
            <?php query_posts('post_type=services'); ?>
                <?php while ( have_posts() ) : the_post(); 
                    $image = get_field("service_image");
                    $size = "full";
                    $service = get_field("service");
                    $description = get_field("service_description");
                ?>
                <li class="individual-service">           
                    <figure>
                        <?php if ($image) {
                            echo wp_get_attachment_image($image, $size); 
                        } ?>
                        
                    </figure>

                    <h2><?php echo $service; ?></h2>
                    <p><?php echo $description; ?></p>
                </li>        
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
                
            </ul>
            <div class="about-contact">
                <h2>Interested in working with us?</h2>
				<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
            </div>
        </div>
    
    </section>

<?php get_footer(); ?>