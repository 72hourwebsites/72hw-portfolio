<?php
/**
 * Comments template.
 *
 * @package HW72_Portfolio
 */

if ( post_password_required() ) {
	return;
}
?>
<section id="comments" class="comments-area singular-content">
	<?php if ( have_comments() ) { ?>
		<h2 class="comments-title"><?php esc_html_e( 'Comments', '72hw-portfolio' ); ?></h2>
		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			);
			?>
		</ol>
		<?php the_comments_navigation(); ?>
	<?php } ?>

	<?php if ( ! comments_open() && get_comments_number() ) { ?>
		<p><?php esc_html_e( 'Comments are closed.', '72hw-portfolio' ); ?></p>
	<?php } ?>

	<?php comment_form(); ?>
</section>
