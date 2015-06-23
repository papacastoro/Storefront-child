<?php get_sidebar();?>
<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	
<?php 

$args = array('per_page' => 3);
do_action(''); 
?>
<!-- #secondary -->
</div>

<div class="widget-area">
<?php if(function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar2')) :else: ?>
<?php endif;?>
</div>