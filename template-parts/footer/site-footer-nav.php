<?php wp_nav_menu(
	array(
		'theme_location'  => 'footer_menu',
		'menu_class'      => 'menu-wrapper',
		'container_class' => 'primary-menu-container',
		'items_wrap'      => '<ul id="footer-nav">%3$s</ul>',
		'fallback_cb'     => false,
	)
); ?>