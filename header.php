<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Free Post</title>

	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="wrapper">
			<a href="<?php echo site_url(); ?>"><img src=" <?php echo get_template_directory_uri(); ?>/components/img/logo-large-01.svg" alt="The Free Post" class="logo"></a>
			<a href="<?php echo site_url(); ?>"><img src=" <?php echo get_template_directory_uri(); ?>/components/img/logo-small-01.svg" alt="The Free Post" class="logo-small"></a>

			<div class="nav-toggle">
				<span></span>
				<span></span>
				<span></span>
			</div>

			<nav>
				<ul>
					<li><a href="<?php echo site_url(); ?>">Home</a></li>
					<li><a href="">Top</a></li>
					<li><a href="">Popular</a></li>
					<li><a href="<?php echo site_url(); ?>/archive">Recent</a></li>

					<li class="section-menu">
						Sections&#9660;
						<ul class="section-nav">
							<?php 

							$numOfCategories = sizeof(get_categories());
							$index = 0;

							while($index < $numOfCategories){
								$catName = get_categories()[$index]->name;
							?>
							<a href="<?php echo get_category_link(get_cat_ID($catName)); ?>"><li><?php echo $catName; ?></li></a>
							<?php
								$index++;
							}
							 ?>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</header>