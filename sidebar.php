<?php
$posts = get_posts('numberposts=1&order=ASC&orderby=post_title');
foreach ($posts as $post) : setup_postdata( $post ); ?>
<div style="font-weight:900"><?php the_title(); ?></div>  
<?php the_content(); ?>
<?php
endforeach;
?>

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

<?php 

$args = array('per_page' => 3);
do_action(''); 
?>
<!-- #secondary -->
</div>

