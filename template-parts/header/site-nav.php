<?php wp_nav_menu(
	array(
		'theme_location'  => 'primary_menu',
		'menu_class'      => 'menu-wrapper',
		'container_class' => 'primary-menu-container',
		'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
		'fallback_cb'     => false,
	)
);