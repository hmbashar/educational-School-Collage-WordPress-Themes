<?php get_header();?>



<div class="single_student_info_area fix">
	<div class="single_student_info fix column">
	
	<?php if(have_posts()) : ?><?php while(have_posts())  : the_post();	?>		
	
	<?php $s_student_gender = get_post_meta($post->ID, 's_student_gender', true);	?>

	<?php if ($s_student_gender == 'Male') : ?>
		<?php	
			global $current_user;
			$view_permission_id = get_post_meta( $post->ID, 's_permission_id', true );
			if( current_user_can('student_teacher_panel_manager') || current_user_can('administrator') || current_user_can('student_dataentry_manager') || current_user_can('student_manager') || current_user_can('editor') || $current_user->ID == $view_permission_id  ) : 
		?>
	
			<?php get_template_part('view_student_info');?>
		
		<?php else : ?>
			<div class="dont_have_access">
				<h2><?php _e('<span>Access denied!</span> You Don\'t have access the information. Only Computer Operator, Administrator and Teachers have permission to view the info.', 'edu_text_domain');?></h2>
			</div>
		<?php endif; ?>
		
	<?php elseif ($s_student_gender == 'Female') : ?>		
		<?php	
			global $current_user;
			$view_permission_id = get_post_meta( $post->ID, 's_permission_id', true );
			if( current_user_can('administrator') || current_user_can('student_dataentry_manager') || current_user_can('student_manager') || $current_user->ID == $view_permission_id ) : 
		?>
	
			<?php get_template_part('view_student_info');?>
		
		<?php else : ?>
			<div class="dont_have_access">
				<h2><?php _e('<span>Access denied!</span> You Don\'t have access the information. Only Computer Operator And Administrator have permission to view the info, because this is female information.', 'edu_text_domain');?></h2>
			</div>
		<?php endif; ?>	
	<?php else : ?>	
		<div class="dont_have_access">
			<h2><?php _e('<span>Sorry!</span> Don\'t have Information.', 'edu_text_domain');?></h2>
		</div>
	<?php endif; ?>		
		
		<?php endwhile; ?> 
		<?php else : ?>

			<h3><?php _e('404 Error&#58; Not Found'); ?></h3>
		<?php endif; ?>

		
	</div>
</div>


<?php get_footer(); ?>