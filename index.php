	
	<?php include 'header.php' ?>

	<div class="home">

		<div class="wrapper">
			<div class="content">
				<div class="featured">
					<?php 

					$sticky = get_option( 'sticky_posts' );
					$query = new WP_Query( 'p=' . $sticky[0] );

					 ?>
					<div class="shown">
						<img src="https://images.unsplash.com/photo-1454678904372-2ca94103eca4?crop=entropy&fit=crop&fm=jpg&h=1000&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1925" alt="">
						<div class="info">
							<h2 class="title">Sanders Crashes and Berns</h2>
							<h4 class="author"><span>by</span> Brian Brennan</h4>
							<p class="quick-description">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eos animi consequuntur in fugit hic aperiam commodi quo architecto! Consequuntur quis minus, temporibus praesentium at. Temporibus, deserunt ipsa consequuntur voluptas.
							</p>
							<div class="rate-bar">
								<div class="comment-note">
									<img src="<?php echo get_template_directory_uri(); ?>/components/img/comments-05.svg" alt="">
									<span>122</span>
								</div>
							</div>
						</div>
					</div>
					<div class="featured-bar">
						<ul>
							<li>It's All Ogre Now</li>
							<div class="divide-line"></div>
							<li>When is enough, enough?</li>
							<div class="divide-line"></div>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
							<div class="divide-line"></div>
							<li>Some other utter garbage</li>	
						</ul>
					</div>
				</div>
				<div class="popular collection">
					<div class="pop-line"><span></span>Popular<span></span></div>
					<div class="article">
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

					<?php
						wpp_get_mostpopular();
					?>

						<!-- <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p> -->
					
				</div>
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