<?php if (function_exists('register_sidebar')){
		register_sidebar( array(
		'name'          => ('Sidebar2' ),
		'id'            => 'sidebar2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );}
?>
		
	

