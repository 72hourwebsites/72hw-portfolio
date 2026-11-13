<?php
/**
 * Not-found template.
 *
 * @package HW72_Portfolio
 */

get_header();
?>
<main id="primary" class="site-main content-section">
	<div class="singular-content">
		<p class="hero__eyebrow">404</p>
		<h1><?php esc_html_e( 'That page could not be found.', '72hw-portfolio' ); ?></h1>
		<p><?php esc_html_e( 'Try a search, or return to the selected work on the home page.', '72hw-portfolio' ); ?></p>
		<?php get_search_form(); ?>
		<p><a class="button" href="<?php echo esc_url( home_url( '/#work' ) ); ?>"><?php esc_html_e( 'View selected work', '72hw-portfolio' ); ?></a></p>
	</div>
</main>
<?php
get_footer();
