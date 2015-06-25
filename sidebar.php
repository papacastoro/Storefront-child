<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package storefront
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	
	<!--	 restituisce un numero definito di prodotti (immagine+titolo) in una parte del sito -->
	
	<?php
		$args = array( 'post_type' => 'product', 'posts_per_page' => 1);
		$loop = new WP_Query( $args );
		
		
		while ( $loop->have_posts() ) : $loop->the_post();
		global $product;
		
		echo '<a href="'.get_permalink().'">' . woocommerce_get_product_thumbnail().' '.the_title().'</a>';
		endwhile;
		
		
		wp_reset_query();
		
		?>
	 	
</div><!-- #secondary -->

