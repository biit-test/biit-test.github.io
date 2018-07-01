<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package biit
 */

get_header();
?>
	<div class="container">	
		<div class="breadcrumbs">
			<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
		</div>
	</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main container">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );


			// If comments are open or we have at least one comment, load up the comment template.

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<style>
		.entry-footer{
			display: none;
		}
		.breadcrumbs{
			height: 0;
		}
		.entry-title{
		    margin: 10px 0px;
		    font-style: italic;
		}
		@media (max-width: 660px) {
			.site-main{
				margin: 0;
			}
			.entry-title{
				padding-top: 0;
			}
		}
	</style>
<?php
get_footer();
