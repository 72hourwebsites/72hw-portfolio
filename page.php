<?php
/**
 * Single page template.
 *
 * @package HW72_Portfolio
 */

get_header();
?>
<main id="primary" class="site-main content-section">
	<?php
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content' );
	}
	?>
</main>
<?php
get_footer();
