<?php
/**
 * Post card and singular content.
 *
 * @package HW72_Portfolio
 */

if ( is_singular() ) {
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'singular-content' ); ?>>
		<header class="entry-header">
			<h1 class="entry-title"><?php echo esc_html( get_the_title() ); ?></h1>
			<?php if ( 'post' === get_post_type() ) { ?>
				<p class="entry-meta"><?php echo esc_html( get_the_date() ); ?></p>
			<?php } ?>
		</header>
		<?php if ( has_post_thumbnail() ) { ?>
			<div class="post-thumbnail"><?php the_post_thumbnail( 'large' ); ?></div>
		<?php } ?>
		<div class="entry-content">
			<?php
			the_content();
			wp_link_pages();
			?>
		</div>
	</article>
	<?php
	return;
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry-card' ); ?>>
	<?php if ( has_post_thumbnail() ) { ?>
		<a class="entry-card__image" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1"><?php the_post_thumbnail( 'medium_large' ); ?></a>
	<?php } ?>
	<div class="entry-card__body">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_the_title() ); ?></a></h2>
		<?php if ( 'post' === get_post_type() ) { ?>
			<p class="entry-meta"><?php echo esc_html( get_the_date() ); ?></p>
		<?php } ?>
		<div class="entry-summary"><?php the_excerpt(); ?></div>
	</div>
</article>
