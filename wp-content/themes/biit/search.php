<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
	<section id="primary" class="content-area container serach__result">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<div class="page-title"><i class="fa fa-cubes"></i>
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Результаты поиска: %s', 'biit' ), '<span>' . get_search_query() . '</span>' );
					?>
				</div>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
	</section><!-- #primary -->
	<style>
		.serach__result h2{
			font-size: 16px;
		}
		.serach__result article[id^="post-"]{
		    border: solid 2px #333b8e;
		    border-radius: 5px;
		    box-sizing: border-box;
		    padding: 2px 15px;
		    display: inline-block;
		    min-width: 50%;
		    margin: 5px 0;
		}
		.serach__result article[id^="post-"]:hover{
			background-color: #f3f4fd94;
		}
		.serach__result article[id^="post-"] h2 > a{
			display: block;
		}
		.site-content{
			margin-bottom: 50px;
		}
		div.page-title{
		    font-size: 22px;
		    margin-bottom: 11px;
		}
	</style>
<?php
get_footer();
