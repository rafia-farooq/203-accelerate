<?php
/**
 * The template for displaying the case studies archive page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
           

        <?php while ( have_posts() ) : the_post(); 
                 $services = get_field('services');
                 $client = get_field('client');
                 $link = get_field('site_link');
                 $image1 = get_field('image_1');
                 $image2 = get_field('image_2');
                 $image3 = get_field('image_3');?>

                              
                <article class="archive-case-study">
                    <aside class="archive-case-study-sidebar">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <h4><?php echo $services; ?></h4>
                        
                        <p><?php the_excerpt(); ?><p>
					
                    <p class="view-more"><strong><a href="<?php echo $link; ?>">View Project ›</a></strong></p>
                </aside>
            

            <div class="case-study-images">
                <a href="<?php the_permalink(); ?>">
	                    <img src="<?php echo $image_1; ?>" /> </a>
                                         

            </div>
         </article>

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
