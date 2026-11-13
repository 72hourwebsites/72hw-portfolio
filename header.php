<?php
/**
 * Site header.
 *
 * @package HW72_Portfolio
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', '72hw-portfolio' ); ?></a>
<header class="site-header">
	<div class="site-header__inner">
		<div class="site-branding">
			<?php if ( has_custom_logo() ) { ?>
				<?php the_custom_logo(); ?>
			<?php } ?>
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		</div>
		<nav class="main-navigation" aria-label="<?php esc_attr_e( 'Primary menu', '72hw-portfolio' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => false,
					'fallback_cb'    => 'wp_page_menu',
					'depth'          => 1,
				)
			);
			?>
		</nav>
	</div>
</header>
