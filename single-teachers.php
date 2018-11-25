<?php get_header();?>



<div class="single_student_info_area fix">
	<div class="single_student_info fix column">	

	<?php 	if(have_posts()) : ?><?php while(have_posts())  : the_post();
		$t_gender = get_post_meta($post->ID, 't_gender', true);  	
	?>	
	
	<?php if ($t_gender == 'Male') : ?>	
		
		<!--condation one loaded -->
		<?php
		global $current_user;
		$t_permission_user_id = get_post_meta( $post->ID, 't_permission_user_id', true );
		if( current_user_can('student_teacher_panel_manager') || current_user_can('administrator') || current_user_can('student_dataentry_manager') || current_user_can('student_manager') || current_user_can('editor') || $current_user->ID == $t_permission_user_id ) : 
		?>
	
		<?php get_template_part('teacher_view_info');?>
		
		<?php else : ?>
			<div class="dont_have_access">
				<h2><?php _e('<span>Access denied!</span> You Don\'t have access the information. Only Computer Operator, Administrator and Teachers have permission to view the info.', 'edu_text_domain');?></h2>
			</div>
		<?php endif; ?>
		<!--condation one loaded -->
		
	<?php elseif ($t_gender == 'Female') : ?>
		
		<!--condation two loaded -->
		<?php
		global $current_user;
		$t_permission_user_id = get_post_meta( $post->ID, 't_permission_user_id', true );
		if( current_user_can('administrator') || current_user_can('student_dataentry_manager') || current_user_can('student_manager') || current_user_can('editor') || $current_user->ID == $t_permission_user_id ) : 
		?>
	
		<?php get_template_part('teacher_view_info');?>
	
		<?php else : ?>
			<div class="dont_have_access">
				<h2><?php _e('<span>Access denied!</span> You Don\'t have access the information. Only Computer Operator And Administrator have permission to view the info, because this is female information.', 'edu_text_domain');?></h2>
			</div>
		<?php endif; ?>	
		<!--condation two loaded -->
		
	<?php else : ?>	
		<div class="dont_have_access">
			<h2><?php _e('<span>Sorry!</span> Don\'t have Information.', 'edu_text_domain');?></h2>
		</div>
	<?php endif; ?>	

	
		<?php endwhile; ?> 
		<?php else : ?>
			<div class="dont_have_access">
				<h2><?php _e('<span>Access denied!</span> You Don\'t have access the information. Only Computer Operator, Administrator and Teachers have permission to view the info.', 'edu_text_domain');?></h2>
			</div>
		<?php endif; ?>
		
	


		
	
	</div>
</div>


<?php get_footer(); ?>