<?php 
/*
Template Name: Teachers List
*/
get_header();
?>

<div class="student_list_area">
	<div class="student_list fix column">
	<?php if( current_user_can('student_teacher_panel_manager') || current_user_can('administrator') || current_user_can('student_dataentry_manager') || current_user_can('student_manager') || current_user_can('editor') ) : ?>
	
	
		<table border="1" class="box">
			<tbody>
				<tr>
					<th><?php _e('Picture', 'edu_text_domain');?></th>
					<th><?php _e('Teacher Name', 'edu_text_domain');?></th>
					<th><?php _e('Index No', 'edu_text_domain');?></th>
					<th><?php _e('Designation', 'edu_text_domain');?></th>
					<th><?php _e('Experience', 'edu_text_domain');?></th>
					<th><?php _e('Birthday<br/>M.D.Y', 'edu_text_domain');?></th>					
					<th><?php _e('Details', 'edu_text_domain');?></th>
				</tr>
				<?php 
				  $temp = $wp_query; 
				  $wp_query = null; 
				  $wp_query = new WP_Query(); 
				  $wp_query->query('showposts=30&post_type=teachers'.'&paged='.$paged); 
				  while ($wp_query->have_posts()) : $wp_query->the_post(); 
				?>
				<?php  
				/*-------------Meta Data Variable------------------------------*/
					$t_designation = get_post_meta($post->ID, 't_designation', true);					
					$t_experience = get_post_meta($post->ID, 't_experience', true);
					$t_index_no = get_post_meta($post->ID, 't_index_no', true);
					$t_date_of_birth = get_post_meta($post->ID, 't_date_of_birth', true);
					$t_list_pic = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 't_list_pic' );
				?>
				<tr>
					<td><img src="<?php echo $t_list_pic[0]; ?>" alt="" /></td>				
					<td><?php the_title(); ?></td>
					<td><?php echo $t_index_no; ?></td>
					<td><?php echo $t_designation; ?></td>
					<td><?php echo $t_experience; ?></td>
					<td><?php echo $t_date_of_birth; ?></td>
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
				<h2><?php _e('<span>Access denied!</span> You Don\'t have access the information. Only Computer Operator, Administrator and Teachers have permission to view the info.', 'edu_text_domain');?></h2>
			</div>
		<?php endif; ?>
		
	</div>
</div>

<?php get_footer();?>