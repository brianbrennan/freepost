<?php get_header(); ?>
	<?php if( have_posts() ) the_post(); ?>

	<?php 

	function the_post_thumbnail_caption() {
		global $post;

		$thumbnail_id    = get_post_thumbnail_id($post->ID);
		$thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));

		if ($thumbnail_image && isset($thumbnail_image[0])) {
			echo '<span class="caption">'.$thumbnail_image[0]->post_excerpt.'</span>';
		}
	}

	 ?>

	<div class="single">
		<div class="wrapper">
			<div class="content">
				<section class="portion full">
					<div class="top-thumbnail"><?php the_post_thumbnail('top-thumbnail'); the_post_thumbnail_caption();?></div>	
				</section>
				<h1 class="title"><?php the_title(); ?></h1>
				<h3 class="author"><span>by</span> <a href="<?php echo get_site_url(); ?>/author/<?php the_author(); ?>"><?php the_author(); ?></a></h3>
				<h4 class="date"><?php the_date(); ?></h4>
					<section class="portion left">
						<?php the_content(); ?>
					</section>
			</div>

			<?php comments_template(); ?>
		</div>
	</div>

<?php get_footer(); ?>