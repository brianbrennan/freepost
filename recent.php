<?php 
/*
	Template Name: Recent
*/
 ?>

<?php get_header(); ?>

	<div class="recent">
		<div class="wrapper">
			<div class="content">
				<h3 class="page-title"><div class="sec-line"></div>Recent Stories<div class="sec-line"></div></h3>
				<?php
					global $post;
					$myposts = get_posts(array('ignore_sticky_posts' => 0));
					foreach($myposts as $post) : setup_postdata($myposts);
				?>
				<div class="article">
						<a href="<?php echo get_the_permalink(); ?>"><?php the_post_thumbnail()?></a>
						<h2 class="title"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<h4 class="author"><span>by</span> <a href="<?php the_author_link(); ?>"><?php echo get_the_author(); ?></a> </h4>
						<p><?php the_excerpt(); ?></p>
						<div class="rate-bar">
							<div class="comment-note">
								<img src="<?php echo get_template_directory_uri(); ?>/components/img/comments-05.svg" alt="">
								<span><?php echo get_comments_number(); ?></span>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>