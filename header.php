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
			<img src=" <?php echo get_template_directory_uri(); ?>/components/img/logo-long-04.svg" alt="The Free Post" class="logo">

			<nav>
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">Popular</a></li>
					<li><a href="">Recent</a></li>
					<li><a href="">Top</a></li>

					<li class="section-menu">
						Sections&#9660;
						<ul class="section-nav">
							<?php 

							$numOfCategories = sizeof(get_categories());
							$index = 0;

							while($index < $numOfCategories){
								$catName = get_categories()[$index]->name;
							?>
							<li><a href="<?php echo get_category_link(get_cat_ID($catName)); ?>"><?php echo $catName; ?></a></li>
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