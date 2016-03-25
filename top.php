<?php 
/*
	Template Name: Top
*/
 ?>

<?php get_header(); ?>

	<div class="top">
		<div class="wrapper">
			<div class="content">
				<h3 class="page-title"><div class="sec-line"></div>Top Stories<div class="sec-line"></div></h3>
				<div class="archive-list">
					<?php
						$args = array(
						'post__in' => get_option('sticky_posts'),
						'caller_get_posts' => 1
						);
						$my_query = new WP_Query($args) ; 
					?>
					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

					<div class="article">
						<a href="<?php echo get_the_permalink(); ?>"><?php the_post_thumbnail()?></a>
						<h2 class="title"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<h4 class="author"><span>by</span> <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a> </h4>
						<p><?php the_excerpt(); ?></p>
						<div class="rate-bar">
							<div class="comment-note">
								<img src="<?php echo get_template_directory_uri(); ?>/components/img/comments-05.svg" alt="">
								<span><?php echo get_comments_number(); ?></span>
							</div>
						</div>
					</div>

				<?php endwhile; ?>

				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>