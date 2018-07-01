<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
	<div id="primary" class="content-area container">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<style>
		.entry-content{
			overflow: auto;
		}
		h1.entry-title{
		    text-align: center;
		    font-size: 28px;
		    font-weight: lighter;
		    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
		    padding: 15px 0px;
		}
		.page__consultation table{
			margin-top: 15px;
		}
		tr{
			background-color: #f5f5f5;
		}
		.page__consultation tr,th,td{
		    background: url(./images/directions-bg.jpg) no-repeat top;
		    background-size: cover;
		    font-size: 16px; 
			border-bottom: #fff solid;
			background-color: #f5f5f5;
			color: #323c8d;
		}
		.page__consultation tr td{
			box-sizing: border-box;
			padding-left: 10px;
		}
		.page__consultation tbody tr:hover{
			cursor: pointer;
		}
		@media (max-width: 660px) {
			h1.entry-title{
				font-size: 18px;
			}
			 tr, th, td{
			 	font-size: 12px;
			 }
		}
	</style>
<?php
get_footer();
