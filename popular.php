<?php 
/*
	Template Name: Popular
*/
 ?>

<?php get_header(); ?>
	<div class="popular">
		<div class="wrapper">
			<div class="content">



				<?php

				global $post;
					$myposts = get_posts(array('ignore_sticky_posts' => 0));

						$popular_posts_args = array(
							'header' => 'Popular Stories',
							'header_start'=> '<h3 class="page-title"><div class="sec-line"></div>',
							'header_end' => '<div class="sec-line"></div></h3>',
							'limit' => 4,
							'range' => 'daily',
							'freshness' => 0,
							'order_by' => 'avg',
							'post_type' => 'post',
							'thumbnail_width' => 30,
							'thumbnail_height' => 30,
							'stats_author' => 1,
							'post_html' => '<div class="article">
												<a href="{url}">
													<img src="' . wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()) ) .'"/>
												</a>
												<h5 class="title"><a href="{url}">{title}</a></h5>
												<h6 class="author"><span>by</span> {author}</h6>
												
											</div>',
							'wpp_start' => '',
							'wpp_end' => ''
						);


						 wpp_get_mostpopular($popular_posts_args);
					?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>