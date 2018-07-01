<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package biit
 */

get_header();

?>
		<section class="b-news">
			<div class="container">
				<div class="news">
					<span class="section__title">
						Все новости
					</span>
					<div class="news__container">
							<?php query_posts('posts_per_page=4'); ?>
							<?php if( have_posts() ){ while( have_posts() ){ the_post(); ?> 
							<a href="<?php the_permalink(); ?>" class="news__item" id="post-<?php the_ID(); ?>"> 
								<div class="item__image">
									<?php 
								$attachments = get_children(array('post_parent' => $post->ID,
								                        'post_status' => 'inherit',
								                        'post_type' => 'attachment',
								                        'post_mime_type' => 'image',
								                        'order' => 'ASC',
								                        'orderby' => 'menu_order ID'));

								foreach($attachments as $att_id => $attachment) {
								    $full_img_url = wp_get_attachment_url($attachment->ID);
								    echo "<img src='$full_img_url'>";
								}
								?>
								<div class="item__date"><?php the_date('j F Y'); ?></div> 
								</div>
								<div class="item__title"><?php the_title(); ?></div> 
							</a> 
							<?php }?> 
							<?php 
							} // конец if 
							else 
							echo "<h2>Записей нет.</h2>"; 
							?>
					</div>
				</div>
			</div>	
		</section>
		<style>
			.news{
				margin-top: 25px;
			}
			.b-news a.news__item:nth-child(5){
				margin-left: 0;
			}
			.b-news .news__item{
				margin: 15px 0;
			}
			.b-news .news__container{
				margin-top: 15px;
			}
			@media (max-width: 660px){
			.b-news .news__item:nth-child(n+3) {
			    display: block;
			}
		</style>
<?php
get_footer();
?>