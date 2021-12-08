<?php 
$blog_info    = get_bloginfo( 'name' );
$description  = get_bloginfo( 'description', 'display' );
$logo         = get_theme_mod('logo');
?>

<?php if ( $logo ) { ?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <img src="<?php echo esc_html($logo); ?>" alt="<?php echo esc_html( $blog_info ); ?>">
</a>
<?php } else { ?>
<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $blog_info ); ?></a></h1>
<p><small><?php echo esc_html( $description ); ?></small></p>
<?php } ?>