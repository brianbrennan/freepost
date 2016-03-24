	<footer>
		<div class="wrapper">
			<nav>
				<ul>
					<li><a href="<?php echo get_site_url();  ?>">Home</a></li>
					<li>Top</li>
					<li>Popular</li>
					<li>Recent</li>
				</ul>
				<ul>
					<li>Sections</li>
					<ul>
						<?php wp_list_categories('title_li='); ?>
					</ul>
				</ul>
				<ul>
					<?php 
					$args = array(
						'title_li' => '',
						'exclude' => '42,45,47,49,51' //edit this for the login pages
						);
					wp_list_pages($args); 
					?>
				</ul>
					
				<ul>
					<?php if(is_user_logged_in()){ ?>
						<li><a href="<?php echo site_url() ?>/profile">Edit Profile</a></li>
						<li><a href="<?php echo site_url() ?>/logout">Logout</a></li>
					<?php } else {?>
						<li><a href="<?php echo site_url() ?>/login">Login</a></li>
						<li><a href="<?php echo site_url() ?>/register">Register</a></li>
						<li><a href="<?php echo site_url() ?>/recover-password">Recover Password</a></li>
					<?php } ?>

					
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