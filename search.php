<?php
/**
 * Search results template.
 *
 * @package HW72_Portfolio
 */

get_header();
?>
<main id="primary" class="site-main content-section">
	<header class="section-heading">
		<h1>
			<?php
			printf(
				/* translators: %s: search query. */
				esc_html__( 'Search results for “%s”', '72hw-portfolio' ),
				esc_html( get_search_query() )
			);
			?>
		</h1>
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
		<p><?php esc_html_e( 'No results matched that search. Try a different phrase.', '72hw-portfolio' ); ?></p>
		<?php get_search_form(); ?>
	<?php } ?>
</main>
<?php
get_footer();
