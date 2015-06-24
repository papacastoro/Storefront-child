<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package storefront
 */

get_header()?>

<?php dynamic_sidebar('sidebar2'); ?>  <!-- la mia sidebar -->   

<section id="recent">

    <h1>Aggiunti di recente</h1>

    <ul class="content-area">

        <?php
            $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 3, 
            				'orderby' =>'date','order' => 'ASC' );
            $loop = new WP_Query( $args );
            	while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
            	
                    <li class="span3">    

                        <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

             <?php if (has_post_thumbnail( $loop->post->ID )) 
                   echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); 
              	else 
              	echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="10px" height="10px" />'; 
              ?>

              <h3>
              <?php the_title(); ?>
              </h3>
                        	   <span class="category">
                        		<?php echo $product->get_price_html(); ?>
                        	   </span>
                        </a>
                        <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
                    	</li><!-- /span3 -->
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>

        </ul><!-- /row-fluid -->
</section><!-- /recent -->   

	
			     

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php 
			if (have_posts()) {
				get_template_part( 'loop' );
			}
			else { 			
				get_template_part( 'content', 'none' );  
			}
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php do_action( 'storefront_sidebar' ); ?>
	
<?php get_footer(); ?>         
		


