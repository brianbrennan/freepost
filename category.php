<?php get_header(); ?>
	<?php if( have_posts() ) the_post(); ?>

	<div class="category">
		<div class="wrapper">
			<div class="content">
				<h3 class="page-title"><div class="sec-line"></div><?php single_cat_title(); ?><div class="sec-line"></div></h3>
				<div class="archive-list">
					<?php 

						$sticky = get_option( 'sticky_posts' );
						rsort( $sticky );
						$sticky = array_slice( $sticky, 0, 5 );
						$the_query = new WP_Query( array( 'post__in' => $sticky, 'ignore_sticky_posts' => 0, 'cat' => get_cat_ID(single_cat_title('', false)) ) );
						if ( $the_query->have_posts() ) {
							$the_query->the_post();

					?>

					<div class="article featured">
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

					<?php } wp_reset_postdata(); ?>


					<?php while ( have_posts() ) : the_post(); ?>
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