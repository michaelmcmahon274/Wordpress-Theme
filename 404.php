<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package uppercase
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
				<img src="wp-content/themes/Wordpress-Theme/assets/images/compass-ValentinAntonucc-pexels.png" alt="Compass">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'uppercase' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links Above?', 'uppercase' ); ?></p>
					
				
				
					

					

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
