	<?php get_header(); ?>
	

	<div class="home">

		<div class="wrapper">
			<div class="content">
				<div class="featured">
					<?php 

					$sticky = get_option( 'sticky_posts' );
					rsort( $sticky );
					$sticky = array_slice( $sticky, 0, 5 );
					$the_query = new WP_Query( array( 'post__in' => $sticky, 'ignore_sticky_posts' => 1 ) );
					if ( $the_query->have_posts() ) {
						$the_query->the_post();

					?>
					<div class="shown">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						<div class="info">

							<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<h4 class="author"><span>by</span><a href=" <?php the_author_link(); ?> "> <?php the_author(); ?></a></h4>
							<p class="quick-description">
								<?php the_excerpt(); ?>
							</p>
							<div class="rate-bar">
								<div class="comment-note">
									<img src="<?php echo get_template_directory_uri(); ?>/components/img/comments-05.svg" alt="">
									<span><?php echo  get_comments_number(); ?></span>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>


					<div class="featured-bar">
						<ul>
							<?php 					
								while ( $the_query->have_posts() ) {
									$the_query->the_post();
								
							?>
							<a href="<?php the_permalink(); ?>"><li><?php the_title(); ?></li></a>
							<div class="divide-line"></div>
							<?php } wp_reset_postdata(); ?>	
						</ul>
					</div>
				</div>
				<!-- <div class="popular collection">
					<div class="pop-line"><span></span>Popular<span></span></div>
					<div class="article"> -->
<!-- 						<a href="<?php echo get_the_permalink(); ?>"><?php the_post_thumbnail()?></a>
						<h5 class="title"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h5>
						<h6 class="author"><span>by</span><a href=" <?php the_author_link(); ?> "> <?php the_author(); ?></a></h6>
						<div class="rate-bar">
							<div class="comment-note">
								<img src="<?php echo get_template_directory_uri(); ?>/components/img/comments-05.svg"/>
								<span><?php echo  get_comments_number(); ?></span>
							</div>
						</div>
					</div> -->
	

				<div class="popular collection">
					<?php

						$popular_posts_args = array(
							'header' => 'Popular',
							'header_start'=> '<div class="pop-line"><span></span>',
							'header_end' => '<span></span></div>',
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
												<div class="rate-bar">
													<div class="comment-note">
													<img src="' . get_template_directory_uri() . '/components/img/comments-05.svg"/>
													<span>' .  get_comments_number() . '</span>
													</div>
												</div>
											</div>',
							'wpp_start' => '',
							'wpp_end' => ''
						);


						 wpp_get_mostpopular($popular_posts_args);
					?>
				</div>


						<!-- <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p> -->
					
				<!-- </div> -->
				<div class="right-banner-ad">
					test
				</div>

				<?php 

				$numOfCategories = sizeof(get_categories());
				$index = 0;
				
				while($index < $numOfCategories){
					$catName = get_categories()[$index]->name;

					$args = array(
						'category_name' => $catName,
						'posts_per_page' => 4
						);

					$posts = get_posts($args);

					
				?>

				<div class="<?php echo $catName; ?> collection">
					<div class="pop-line"><span></span><?php echo $catName; ?><span></span></div>

					<?php foreach($posts as $post) : setup_postdata($post); ?>

					<div class="article">
						<a href="<?php echo get_the_permalink(); ?>"><?php the_post_thumbnail()?></a>
						<h5 class="title"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h5>
						<h6 class="author"><span>by</span><a href=" <?php the_author_link(); ?> "> <?php the_author(); ?></a></h6>
						<div class="rate-bar">
							<div class="comment-note">
								<img src="<?php echo get_template_directory_uri(); ?>/components/img/comments-05.svg"/>
								<span><?php echo  get_comments_number(); ?></span>
							</div>
						</div>
					</div>

					<?php endforeach; wp_reset_postdata(); ?>

				</div>

				<?php 
						$index++;
					}
				 ?>

				<!-- <div class="politics collection">
					<div class="pop-line"><span></span>Politics<span></span></div>
					<div class="article">
						<img src="https://images.unsplash.com/photo-1445346366695-5bf62de05412?crop=entropy&fit=crop&fm=jpg&h=1000&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1925" alt="">
						<h5 class="title">Lorem</h5>
						<h6 class="author"><span>by</span> Lou Gehrig</h6>
						<div class="rate-bar">
							<div class="comment-note">
								<img src="components/img/comments-05.svg" alt="">
								<span>122</span>
							</div>
						</div>
					</div>

					<div class="article">
						<img src="https://images.unsplash.com/photo-1453170804045-277782641dca?crop=entropy&fit=crop&fm=jpg&h=1000&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1925" alt="">
						<h5 class="title">Lorem ipsum dolor sit amet</h5>
						<h6 class="author"><span>by</span> Lou Gehrig</h6>
						<div class="rate-bar">
							<div class="comment-note">
								<img src="components/img/comments-05.svg" alt="">
								<span>122</span>
							</div>
						</div>
					</div>

					<div class="article">
						<img src="https://images.unsplash.com/photo-1452716726610-30ed68426a6b?crop=entropy&fit=crop&fm=jpg&h=1000&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1925" alt="">
						<h5 class="title">Lorem ipsum dolor sit amet</h5>
						<h6 class="author"><span>by</span> Lou Gehrig</h6>
						<div class="rate-bar">
							<div class="comment-note">
								<img src="components/img/comments-05.svg" alt="">
								<span>122</span>
							</div>
						</div>
					</div>

					<div class="article">
						<img src="https://images.unsplash.com/photo-1451417379553-15d8e8f49cde?crop=entropy&fit=crop&fm=jpg&h=1000&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1925" alt="">
						<h5 class="title">Lorem ipsum dolor sit amet</h5>
						<h6 class="author"><span>by</span> Lou Gehrig</h6>
						<div class="rate-bar">
							<div class="comment-note">
								<img src="components/img/comments-05.svg" alt="">
								<span>122</span>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>

	<?php get_footer(); ?>