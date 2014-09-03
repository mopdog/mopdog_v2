<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package mopdog
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/dist/html5shiv.js"></script>
<![endif]-->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script type="text/javascript">less = {}; less.env = 'development'; //TAKE OUT ONCE SITE IS LIVE AND COMPILED</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
			
			<header>
				<nav id="menu-wrap">
				<?php wp_nav_menu( array( 
				    'theme_location' => 'primary',
				    'menu_class' => 'flexnav',
				    'items_wrap' => '<ul id="menu">%3$s</ul>', 
				    ));
				    ?>
				</nav>
			</header>
<<<<<<< HEAD


=======
>>>>>>> 11f553bba8f05445f5af47237ec121a41ef2fa3a
