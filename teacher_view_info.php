	
<?php 
global $redux_demo;
/*--------------------------------------
Meta Data Variable
--------------------------------------*/
$t_single_pic = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 't_single_pic' );
$t_designation = get_post_meta($post->ID, 't_designation', true);					
$t_experience = get_post_meta($post->ID, 't_experience', true);
$t_index_no = get_post_meta($post->ID, 't_index_no', true);
$t_date_of_birth = get_post_meta($post->ID, 't_date_of_birth', true);
$t_join_date = get_post_meta($post->ID, 't_join_date', true);
$t_email_address = get_post_meta($post->ID, 't_email_address', true);
$t_emp_permanent = get_post_meta($post->ID, 't_emp_permanent', true);
$t_mobile_number = get_post_meta($post->ID, 't_mobile_number', true);
$t_promostion_date = get_post_meta($post->ID, 't_promostion_date', true);
$t_promostion_name = get_post_meta($post->ID, 't_promostion_name', true);
$t_subjects_name = get_post_meta($post->ID, 't_subjects_name', true);
$t_join_desi = get_post_meta($post->ID, 't_join_desi', true);				
$ssc_edu = get_post_meta($post->ID, 'ssc_edu', true);
$ssc_year = get_post_meta($post->ID, 'ssc_year', true);
$ssc_group_subject = get_post_meta($post->ID, 'ssc_group_subject', true);
$ssc_board = get_post_meta($post->ID, 'ssc_board', true);
$ssc_gpa = get_post_meta($post->ID, 'ssc_gpa', true);
$hsc_edu = get_post_meta($post->ID, 'hsc_edu', true);
$hsc_year = get_post_meta($post->ID, 'hsc_year', true);
$hsc_group_subject = get_post_meta($post->ID, 'hsc_group_subject', true);
$hsc_board = get_post_meta($post->ID, 'hsc_board', true);
$hsc_gpa = get_post_meta($post->ID, 'hsc_gpa', true);
$honours_edu = get_post_meta($post->ID, 'honours_edu', true);
$honours_year = get_post_meta($post->ID, 'honours_year', true);
$honours_group_subject = get_post_meta($post->ID, 'honours_group_subject', true);
$honours_board = get_post_meta($post->ID, 'honours_board', true);
$honours_gpa = get_post_meta($post->ID, 'honours_gpa', true);
$master_edu = get_post_meta($post->ID, 'master_edu', true);
$master_year = get_post_meta($post->ID, 'master_year', true);
$master_group_subject = get_post_meta($post->ID, 'master_group_subject', true);
$master_board = get_post_meta($post->ID, 'master_board', true);
$master_gpa = get_post_meta($post->ID, 'master_gpa', true);
$other_edu = get_post_meta($post->ID, 'other_edu', true);
$other_year = get_post_meta($post->ID, 'other_year', true);
$other_group_subject = get_post_meta($post->ID, 'other_group_subject', true);
$other_board = get_post_meta($post->ID, 'other_board', true);
$other_gpa = get_post_meta($post->ID, 'other_gpa', true);  
$t_per_village = get_post_meta($post->ID, 't_per_village', true);  
$t_per_post_office = get_post_meta($post->ID, 't_per_post_office', true);  
$t_per_upzilla = get_post_meta($post->ID, 't_per_upzilla', true);  
$t_per_district = get_post_meta($post->ID, 't_per_district', true);  
$t_pres_village = get_post_meta($post->ID, 't_pres_village', true);  
$t_post_office = get_post_meta($post->ID, 't_post_office', true);  
$t_pres_upzilla = get_post_meta($post->ID, 't_pres_upzilla', true);  
$t_pres_district = get_post_meta($post->ID, 't_pres_district', true);  
$t_gender = get_post_meta($post->ID, 't_gender', true);  
?>


		<div class="student_school_info_header fix">
			<div class="std_school_top fix">
				<div class="student_logo floatleft">
					<img title="School Logo" src="<?php echo $redux_demo['left-logo-upload']['url'];?>" alt="" />
				</div>
				<div class="std_school_info floatleft">
					<h1><?php echo $redux_demo ['school-full-name']; ?></h1>
					<h3><?php _e('Post Office', 'edu_text_domain');?>: <?php echo $redux_demo['std-info-post-office'];?>, <?php _e('Upzilla', 'edu_text_domain');?>: <?php echo $redux_demo['std-info-upzilla']; ?>, <?php _e('District', 'edu_text_domain');?>: <?php echo $redux_demo['std-info-district'] ; ?></h3>
					<h3><span><?php _e('Placed', 'edu_text_domain');?>: <?php echo $redux_demo['std-info-placed']; ?></span></h3>
				</div>
				<div title="<?php echo $s_student_name; ?> Picture" class="std_school_photo floatright">
					<img src="<?php echo $t_single_pic[0];?>" alt="" />
				</div>
			</div>
			<div class="std_school_bottom fix">
				<p><?php _e('Upzilla Code', 'edu_text_domain');?>: <?php echo $redux_demo['std-info-upzillacode']; ?>, <?php _e('Zilla code', 'edu_text_domain');?>: <?php echo $redux_demo['std-info-zillacode']; ?>, <?php _e('School Code', 'edu_text_domain');?>: <?php echo $redux_demo['std-info-schoolcode']; ?>, <?php _e('EIIN', 'edu_text_domain');?>: <?php echo $redux_demo['std-info-eiincode'] ;?>, <?php _e('Email', 'edu_text_domain');?>: <?php echo $redux_demo['std-info-email'] ; ?></p>
			</div>
		</div>
		<hr/>	
	
		<div class="std_form_meddle_content fix">
			<div class="std_form_meddle_left floatleft">
				<h3><?php _e('Index No', 'edu_text_domain');?>: <?php echo $t_index_no; ?></h3>
			</div>
			<div class="std_form_meddle_meddle floatleft">
				<h2><?php _e('Teacher Information', 'edu_text_domain');?></h2>
			</div>
			<div class="std_form_meddle_right floatright">					
				<h3><?php _e('Join Date (M.D.Y)', 'edu_text_domain');?>: <?php echo $t_join_date; ?></h3>
			</div>
		</div>
		<div class="student_info fix">
			<div class="full_width_style fix">
				<p><span><?php _e('Teacher Name', 'edu_text_domain');?> :</span>  <?php the_title(); ?></p>
			</div>
			<div class="full_width_style fix">
				<div class="half_width_style floatleft">
					<p><span><?php _e('Join Designation', 'edu_text_domain');?> :</span> <?php echo $t_join_desi; ?></p>					
				</div>
				<div class="half_width_style floatleft">
					<p><span><?php _e('Current Designation', 'edu_text_domain');?> :</span>  <?php echo $t_designation; ?></p>					
				</div>
			</div>
			<div class="full_width_style fix">
				<div class="half_width_style floatleft">
					<p><span><?php _e('Subjects Name', 'edu_text_domain');?> :</span>  <?php echo $t_subjects_name; ?></p>
				</div>
				<div class="half_width_style floatleft">
					<p><span><?php _e('Employment Permanenly', 'edu_text_domain');?> :</span>  <?php echo $t_emp_permanent; ?></p>
				</div>
			</div>
			<div class="full_width_style fix">
				<div class="half_width_style floatleft">
					<?php if($t_email_address) : ?>
						<p><span><?php _e('Email Address', 'edu_text_domain');?> :</span>  <?php echo $t_email_address; ?></p>
					<?php else : ?>
						<p><span><?php _e('Email Address', 'edu_text_domain');?> :</span> Don't Have Email</p>
					<?php endif; ?>
				</div>
				<div class="half_width_style floatleft">
					<p><span><?php _e('Mobile Number', 'edu_text_domain');?> :</span>  <?php echo $t_mobile_number; ?></p>
				</div>
			</div>
			<?php if ($t_promostion_name && $t_promostion_date) : ?>
			<div class="full_width_style fix">
				<div class="half_width_style floatleft">
					<p><span><?php _e('Promotion Name', 'edu_text_domain');?> :</span> <?php echo $t_promostion_name; ?></p>
				</div>
				<div class="half_width_style floatleft">
					<p><span><?php _e('Promotion Date (M.D.Y)', 'edu_text_domain');?> :</span> <?php echo $t_promostion_date; ?></p>
				</div>
			</div>
			<?php endif; ?>
			<div class="full_width_style fix">
				<div class="half_width_style floatleft">
					<p><span><?php _e('Date Of Birth (M.D.Y)', 'edu_text_domain');?> :</span>  <?php echo $t_date_of_birth; ?></p>
				</div>
				<div class="half_width_style floatleft">
					<p><span><?php _e('Experience', 'edu_text_domain');?> :</span>  <?php echo $t_experience; ?></p>
				</div>
			</div>
			<div class="full_width_style fix">
				<div class="half_width_style floatleft">
					<p><span><?php _e('Gender', 'edu_text_domain');?> :</span>  <?php echo $t_gender; ?></p>
				</div>
				<div class="half_width_style floatleft">
					
				</div>
			</div>
			<div class="permanent_address fix">
				<h3 ><?php _e('Permanent Address', 'edu_text_domain');?></h3>
				<div class="full_width_style fix">
					<div class="half_width_style floatleft">
						<p><span><?php _e('Village', 'edu_text_domain');?> :</span>  <?php echo $t_per_village; ?></p>
					</div>
					<div class="half_width_style floatleft">
						<p><span><?php _e('Post Office', 'edu_text_domain');?> :</span>  <?php echo $t_per_post_office; ?></p>						
					</div>
				</div>
				<div class="full_width_style fix">
					<div class="half_width_style floatleft">
						<p><span><?php _e('Upzilla', 'edu_text_domain');?> :</span>  <?php echo $t_per_upzilla; ?></p>
					</div>
					<div class="half_width_style floatleft">
						<p><span><?php _e('District', 'edu_text_domain');?> :</span>  <?php echo $t_per_district; ?></p>						
					</div>
				</div>
			</div>
			<div class="present_address fix">
				<h3><?php _e('Present Address', 'edu_text_domain');?></h3>
				<div class="full_width_style fix">
					<div class="half_width_style floatleft">
						<p><span><?php _e('Village', 'edu_text_domain');?> :</span>  <?php echo $t_pres_village; ?></p>
					</div>
					<div class="half_width_style floatleft">
						<p><span><?php _e('Post Office', 'edu_text_domain');?> :</span>  <?php echo $t_post_office; ?></p>						
					</div>
				</div>
				<div class="full_width_style fix">
					<div class="half_width_style floatleft">
						<p><span><?php _e('Upzilla', 'edu_text_domain');?> :</span> <?php echo $t_pres_upzilla; ?></p>
					</div>
					<div class="half_width_style floatleft">
						<p><span><?php _e('District', 'edu_text_domain');?> :</span>  <?php echo $t_pres_district; ?></p>						
					</div>
				</div>
			</div>
			<div class="permanent_address fix">
				<h3 ><?php _e('Educations', 'edu_text_domain');?></h3>
				<table border="1" class="box">
					<tbody>
						<tr>
							<th><?php _e('Name of the<br/>Examination', 'edu_text_domain');?></th>
							<th><?php _e('Year of<br/>Passing', 'edu_text_domain');?></th>
							<th><?php _e('Group/Subject', 'edu_text_domain');?></th>
							<th><?php _e('Board/University', 'edu_text_domain');?></th>
							<th><?php _e('Division / GPA', 'edu_text_domain');?></th>
						</tr>
						

						<?php if ($ssc_edu && $ssc_year && $ssc_group_subject && $ssc_board && $ssc_gpa) : ?>
						<tr>			
							<td><?php echo $ssc_edu; ?></td>
							<td><?php echo $ssc_year; ?></td>
							<td><?php echo $ssc_group_subject; ?></td>
							<td><?php echo $ssc_board; ?></td>
							<td><?php echo $ssc_gpa; ?></td>
						</tr>
						<?php endif; ?>
						<?php if ($hsc_edu && $hsc_year && $hsc_group_subject && $hsc_board && $hsc_gpa) : ?>
						<tr>			
							<td><?php echo $hsc_edu; ?></td>
							<td><?php echo $hsc_year; ?></td>
							<td><?php echo $hsc_group_subject; ?></td>
							<td><?php echo $hsc_board; ?></td>
							<td><?php echo $hsc_gpa; ?></td>
						</tr>
						<?php endif; ?>
						
						<?php if ($honours_edu && $honours_year && $honours_group_subject && $honours_board && $honours_gpa) : ?>
						<tr>			
							<td><?php echo $honours_edu; ?></td>
							<td><?php echo $honours_year; ?></td>
							<td><?php echo $honours_group_subject; ?></td>
							<td><?php echo $honours_board; ?></td>
							<td><?php echo $honours_gpa; ?></td>
						</tr>
						<?php endif; ?>
						
						<?php if ($master_edu && $master_year && $master_group_subject && $master_board && $master_gpa) : ?>
						<tr>			
							<td><?php echo $master_edu; ?></td>
							<td><?php echo $master_year; ?></td>
							<td><?php echo $master_group_subject; ?></td>
							<td><?php echo $master_board; ?></td>
							<td><?php echo $master_gpa; ?></td>
						</tr>
						<?php endif; ?>
						
						<?php if ($other_edu && $other_year && $other_group_subject && $other_board && $other_gpa) : ?>
						<tr>			
							<td><?php echo $other_edu; ?></td>
							<td><?php echo $other_year; ?></td>
							<td><?php echo $other_group_subject; ?></td>
							<td><?php echo $other_board; ?></td>
							<td><?php echo $other_gpa; ?></td>
						</tr>
						<?php endif; ?>							
					</tbody>
					
				</table>				
			</div>
			
			<p style="color: red;opacity: 0.40;text-align: left;font-size: 17px;"><?php _e('Note: All Date Format is (Month/Date/Year)', 'edu_text_domain');?></p>
			<div class="print_button">
				<h2 ><i class="fa fa-print"></i><a href="javascript:window.print()"><?php _e('Print', 'edu_text_domain');?></a></h2>
			</div>

		</div>	
