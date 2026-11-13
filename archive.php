<?php
/**
 * Archive template.
 *
 * @package HW72_Portfolio
 */

get_header();
?>
<main id="primary" class="site-main content-section">
	<header class="section-heading">
		<?php
		the_archive_title( '<h1>', '</h1>' );
		the_archive_description( '<div class="archive-description">', '</div>' );
		?>
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
		<p><?php esc_html_e( 'No items were found in this archive.', '72hw-portfolio' ); ?></p>
	<?php } ?>
</main>
<?php
get_footer();
