<?php get_header(); ?>
	<?php if( have_posts() ) the_post(); ?>

	<div class="page">
		<div class="wrapper">
			<div class="content">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>