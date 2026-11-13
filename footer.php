<?php
/**
 * Site footer.
 *
 * @package HW72_Portfolio
 */
?>
<footer class="site-footer">
	<div class="site-footer__inner">
		<p>
			<?php
			printf(
				/* translators: 1: current year, 2: site name. */
				esc_html__( '© %1$s %2$s. Built with native WordPress templates.', '72hw-portfolio' ),
				esc_html( wp_date( 'Y' ) ),
				esc_html( get_bloginfo( 'name' ) )
			);
			?>
		</p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
