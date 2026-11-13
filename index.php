<?php
/**
 * Main template.
 *
 * @package HW72_Portfolio
 */

get_header();
?>
<main id="primary" class="site-main content-section">
	<header class="section-heading">
		<h1><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1>
		<?php if ( get_bloginfo( 'description' ) ) { ?>
			<p><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p>
		<?php } ?>
	</header>

	<?php if ( have_posts() ) { ?>
		<div class="posts-grid">
			<?php
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content' );
			}
			?>
		</div>
		<?php the_posts_pagination(); ?>
	<?php } else { ?>
		<p><?php esc_html_e( 'Nothing has been published here yet.', '72hw-portfolio' ); ?></p>
	<?php } ?>
</main>
<?php
get_footer();
