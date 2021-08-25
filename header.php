<?php
/**
 * The theme header
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo get_option('humberto_theme_options')['blog_descr'] ?>">
	<meta name="keywords" content="<?php echo get_option('humberto_theme_options')['blog_inf'] ?>">
    <meta name="author" content="<?php echo get_option('humberto_theme_options')['blog_author'] ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'humberto' ); ?></a>
	<header class="site-header">
		<div class="site-information">
			<h1><a href="<?php echo get_bloginfo('wpurl'); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
			<p><?php echo get_bloginfo('description'); ?></p>
		</div>
		
		<label for="menu-toggle">Menu</label>
		<input id="menu-toggle" type="checkbox" name="menu-toggle">
		<nav>
			<?php wp_nav_menu( array(
			    'theme_location' => 'header-menu',
			    'container' => false,
			    ) ); ?>
		</nav>
	</header>
	
	<!-- start content here -->
	<div id="content" class="content">
