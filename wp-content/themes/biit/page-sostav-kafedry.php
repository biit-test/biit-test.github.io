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
		<article id="post-146" class="post-146 page type-page status-publish hentry">
			<header class="entry-header">
				<h1 class="entry-title">Состав кафедры</h1>
			</header><!-- .entry-header -->
			<hr>
		</article>
</div>	
<style>
		h1.entry-title{
		    text-align: center;
		    font-size: 28px;
		    font-weight: lighter;
		}
</style>
<?php
get_footer();
