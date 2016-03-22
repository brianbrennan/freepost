<?php 



if(post_password_required()){
	return;
}
 ?>

 <div class="comments">


 	<?php comment_form(); ?>

 	<h5>
 		Comments
 	</h5>
 	
	<?php if ( have_comments() ) : ?>
		<?php wp_list_comments( array(
					'style'       => 'div',
					'short_ping'  => true,
					'avatar_size' => 56,
				) ); ?>
	<?php endif; ?>

	
 </div>