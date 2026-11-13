<?php
/**
 * Portfolio front page.
 *
 * @package HW72_Portfolio
 */

get_header();
?>
<main id="primary" class="site-main">
	<section class="hero">
		<div class="hero__inner">
			<p class="hero__eyebrow"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></p>
			<h1><?php esc_html_e( 'WordPress development and practical automation.', '72hw-portfolio' ); ?></h1>
			<p class="hero__intro"><?php esc_html_e( 'Custom themes and plugins, reliable site care, and thoughtful connections between the tools a business already uses.', '72hw-portfolio' ); ?></p>
			<a class="button" href="#work"><?php esc_html_e( 'View selected work', '72hw-portfolio' ); ?></a>
		</div>
	</section>

	<section id="work" class="showcase-section" aria-labelledby="work-heading">
		<div class="showcase-section__inner">
			<div class="section-heading">
				<p class="section-heading__eyebrow"><?php esc_html_e( 'Selected work', '72hw-portfolio' ); ?></p>
				<h2 id="work-heading"><?php esc_html_e( 'Projects with a clear job to do', '72hw-portfolio' ); ?></h2>
				<p><?php esc_html_e( 'A focused collection of WordPress code, web projects, and working demos.', '72hw-portfolio' ); ?></p>
			</div>
			<?php
			if ( shortcode_exists( 'hw72_showcase' ) ) {
				echo do_shortcode( '[hw72_showcase limit="12"]' );
			} elseif ( have_posts() ) {
				?>
				<div class="posts-grid">
					<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'template-parts/content' );
					}
					?>
				</div>
				<?php
			} else {
				?>
				<p><?php esc_html_e( 'Add Showcase Items with the 72HW Showcase plugin, or publish a post, to start the portfolio.', '72hw-portfolio' ); ?></p>
				<?php
			}
			?>
		</div>
	</section>
</main>
<?php
get_footer();
