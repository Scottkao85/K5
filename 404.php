<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package K5
 */

get_header(); ?>

	<div class="site-content-wrapper">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				
				<div class="hentry-wrapper">
					<section class="error-404 not-found">
						<header class="page-header">
							<h1 class="page-title font-secondary"><?php esc_html_e( 'Oops, that page can&rsquo;t be found.', 'shoreditch' ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content">
							<p>Return to the <a href="/"/>home page</a>.</p>

						</div><!-- .page-content -->
					</section><!-- .error-404 -->	
				</div>

			</main><!-- #main -->
		</div><!-- #primary -->

	</div><!-- .site-content-wrapper -->

<?php
get_sidebar( 'footer' );
get_footer();
