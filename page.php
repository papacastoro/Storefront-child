<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package storefront
 */

get_header();
?>

<div class="entry-content"> 
	<ul class="product_list_widget">
	<?php 
	$args = array(
			'post_type' => 'product',
			'post_per page' => 3,			
				);
	if ($args ->have_posts())
	{
	get_products($args,$instance);
	}
	else {
		echo _('Shop vuoto');
	}	
	?>
	</ul>


	<div id="primary" <ul class="products">
	<?php
		$args = array(
			'post_type' => 'product',
			'per_page' => 3,
					);
		
		/*$args = array(
				'columns' => '2',
				'orderby' => 'title',
				'order' => 'asc'
		);*/
		
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
				woocommerce_get_template_part( 'content', 'product' );
			endwhile;
		} else {
			echo __( 'Nessun prodotto' );
		}
		wp_reset_postdata();
	?>
</ul>

</div>

