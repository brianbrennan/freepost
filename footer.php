	<footer>
		<div class="wrapper">
			<nav>
				<ul>
					<li><a href="<?php echo get_site_url();  ?>">Home</a></li>
					<li>Recent</li>
					<li>Top</li>
					<li>Popular</li>
				</ul>
				<ul>
					<li><a href="<?php echo get_site_url();  ?>/category/">Sections</a></li>
					<ul>
						<?php wp_list_categories('title_li='); ?>
					</ul>
				</ul>
				<ul>
					<?php wp_list_pages('title_li='); ?>
				</ul>
			</nav>

			<div class="copyright">
				Copyright 2016 Free Post
			</div>
		</div>
	</footer>

	<div class="overlay">
		<div class="panel">
			<h4>Stay Informed<span>with our</span><span class="big"><span class="sec-line"></span> Newsletter <span class="sec-line"></span></span></h4>
			<span class="close">X</span>
			<form action="">
				<input type="text" placeholder="Enter Your Email">
				<input type="submit">
			</form>
			<span class="disclaimer">You'll receive updates on the best stories, and can cancel anytime! </span>
		</div>
	</div>
	
</body>

<?php wp_footer() ?>
</html>