<?php 
/*
Template Name: Student List
*/
get_header();
?>

<div class="student_list_area">
	<div class="student_list fix column">
		<?php if( current_user_can('student_teacher_panel_manager') || current_user_can('administrator') || current_user_can('student_dataentry_manager') || current_user_can('student_manager') || current_user_can('editor') || current_user_can('student_students_panel_manager') ) : ?>
		<table border="1" class="box">
			<tbody>
				<tr>
					<th><?php _e('Picture', 'edu_text_domain');?></th>
					<th><?php _e('Student Name', 'edu_text_domain');?></th>
					<th><?php _e('Reg No', 'edu_text_domain');?></th>
					<th><?php _e('Form No', 'edu_text_domain');?></th>
					<th><?php _e('Father Name', 'edu_text_domain');?></th>
					<th><?php _e('Birthday', 'edu_text_domain');?></th>					
					<th><?php _e('Details', 'edu_text_domain');?></th>
				</tr>
				<?php 
				  $temp = $wp_query; 
				  $wp_query = null; 
				  $wp_query = new WP_Query(); 
				  $wp_query->query('showposts=30&post_type=student'.'&paged='.$paged); 
				  while ($wp_query->have_posts()) : $wp_query->the_post(); 
				?>
				<?php  /*-------------Meta Data Variable------------------------------*/
					$s_form_number = get_post_meta($post->ID, 's_form_number', true);
					// $s_student_name = get_post_meta($post->ID, 's_student_name', true);
					$s_father_student_name = get_post_meta($post->ID, 's_father_student_name', true);
					$s_student_registration_no = get_post_meta($post->ID, 's_student_registration_no', true);
					$s_student_date_of_birth = get_post_meta($post->ID, 's_student_date_of_birth', true);
					$s_student_list_pic = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 's_student_list_pic' );
				?>
				<tr>
					<td><img src="<?php echo $s_student_list_pic[0]; ?>" alt="" /></td>				
					<td><?php the_title(); ?></td>
					<td><?php echo $s_student_registration_no; ?></td>
					<td><?php echo $s_form_number; ?></td>
					<td><?php echo $s_father_student_name; ?></td>
					<td><?php echo $s_student_date_of_birth; ?></td>
					<td class="view_student_details"><a href="<?php the_permalink(); ?>"><?php _e('View Details', 'edu_text_domain');?></a></td>
				</tr>
				<?php endwhile; ?>
				<div class="post_pagi">
					<?php 
						the_posts_pagination(array(
							'screen_reader_text'		=> ' ',
						));
					?>	
				</div>
				<?php 
				  $wp_query = null; 
				  $wp_query = $temp;  // Reset
				?>

			</tbody>

		</table>
			<div class="print_button">
				<h2 ><i class="fa fa-print"></i><a href="javascript:window.print()"><?php _e('Print', 'edu_text_domain');?></a></h2>
			</div>
		<?php else : ?>
			<div class="dont_have_access">
				<h2><?php _e('<span>Access denied!</span> You Don\'t have access the information. Only Computer Operator, Administrator, Teachers and Students have permission to view the info.', 'edu_text_domain');?></h2>
			</div>
		<?php endif; ?>
	</div>
</div>

<?php get_footer();?>