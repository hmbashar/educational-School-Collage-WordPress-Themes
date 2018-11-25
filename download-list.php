<?php 
/*
Template Name: Download List
*/
get_header();
?>

<div class="student_list_area">
	<div class="student_list fix column">
		<table border="1" class="box">
			<tbody>
				<tr>
					<th><?php _e('File Name', 'edu_text_domain');?></th>
					<th><?php _e('Upload Date', 'edu_text_domain');?></th>				
					<th><?php _e('Upload Time', 'edu_text_domain');?></th>				
					<th><?php _e('Details', 'edu_text_domain');?></th>
				</tr>
				<?php 
				  $temp = $wp_query; 
				  $wp_query = null; 
				  $wp_query = new WP_Query(); 
				  $wp_query->query('showposts=30&post_type=post&cat=7'.'&paged='.$paged); 
				  while ($wp_query->have_posts()) : $wp_query->the_post(); 
				?>
				<tr>			
					<td><?php the_title(); ?></td>
					<td><?php the_time('j/m/Y'); ?></td>
					<td><?php the_time('g : i A'); ?> </td>
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

	</div>
</div>

<?php get_footer();?>