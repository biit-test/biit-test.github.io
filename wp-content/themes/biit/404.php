<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package biit
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container">

			<section class="error-404 not-found">
				<div class="error__page">
					<div class="page__image">
						<img src="<?php bloginfo('template_directory') ?>/images/404.png" alt="">
						<div class="page__title">
							Такой страницы не существует
						</div>
					</div>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
