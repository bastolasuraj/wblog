<footer>
    <p>&copy; 2024 MyWebsite. All Rights Reserved.</p>
    <p>Website designed and developed by: Suraj Bastola</p>
</footer>

<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sbastola
 */

?>

<footer id="colophon" class="site-footer">
    <div class="site-info">

		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf( esc_html__( '&copy; %1$s by %2$s.', 'sbastola' ), 'sbastola', '<a href="http://sbastola.com/">Suraj Bastola</a>' );
		?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
