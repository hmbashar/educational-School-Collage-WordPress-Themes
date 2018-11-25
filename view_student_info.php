<?php global $redux_demo; ?>
<?php 
/*--------------------------------------
Meta Data Variable
--------------------------------------*/
$s_form_number = get_post_meta($post->ID, 's_form_number', true);
$s_registration_date = get_post_meta($post->ID, 's_registration_date', true);
$s_father_student_name = get_post_meta($post->ID, 's_father_student_name', true);
$s_father_profession_student_name = get_post_meta($post->ID, 's_father_profession_student_name', true);
$s_mother_student_name = get_post_meta($post->ID, 's_mother_student_name', true);
$s_mother_profession_student_name = get_post_meta($post->ID, 's_mother_profession_student_name', true);
$s_student_guardian_name = get_post_meta($post->ID, 's_student_guardian_name', true);
$s_student_guardian_mo_no = get_post_meta($post->ID, 's_student_guardian_mo_no', true);
$s_student_class_roll = get_post_meta($post->ID, 's_student_class_roll', true);
$s_student_registration_no = get_post_meta($post->ID, 's_student_registration_no', true);
$s_student_date_of_birth = get_post_meta($post->ID, 's_student_date_of_birth', true);
$s_student_yearly_income = get_post_meta($post->ID, 's_student_yearly_income', true);
$s_student_per_village = get_post_meta($post->ID, 's_student_per_village', true);
$s_student_per_post_office = get_post_meta($post->ID, 's_student_per_post_office', true);
$s_student_per_upzilla = get_post_meta($post->ID, 's_student_per_upzilla', true);
$s_student_per_district = get_post_meta($post->ID, 's_student_per_district', true);
$s_student_pres_district = get_post_meta($post->ID, 's_student_pres_district', true);
$s_student_pres_upzilla = get_post_meta($post->ID, 's_student_pres_upzilla', true);
$s_student_pres_post_office = get_post_meta($post->ID, 's_student_pres_post_office', true);
$s_student_pres_village = get_post_meta($post->ID, 's_student_pres_village', true);
$s_student_before_school_name = get_post_meta($post->ID, 's_student_before_school_name', true);
$s_student_gender = get_post_meta($post->ID, 's_student_gender', true);
$s_student_pic = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 's_student_pic' );
  
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
				<div title="<?php the_title(); ?> Picture" class="std_school_photo floatright">
					<img src="<?php echo $s_student_pic[0];?>" alt="" />
				</div>
			</div>
			<div class="std_school_bottom fix">
				<p><?php _e('Upzilla Code', 'edu_text_domain');?>: <?php echo $redux_demo['std-info-upzillacode']; ?>, <?php _e('Zilla code', 'edu_text_domain');?>: <?php echo $redux_demo['std-info-zillacode']; ?>, <?php _e('School Code', 'edu_text_domain');?>: <?php echo $redux_demo['std-info-schoolcode']; ?>, <?php _e('EIIN', 'edu_text_domain');?>: <?php echo $redux_demo['std-info-eiincode'] ;?>, <?php _e('Email', 'edu_text_domain');?>: <?php echo $redux_demo['std-info-email'] ; ?></p>
			</div>
		</div>
		<hr/>	
	
		<div class="std_form_meddle_content fix">
			<div class="std_form_meddle_left floatleft">
				<h3><?php _e('Form No', 'edu_text_domain');?>: <?php echo $s_form_number; ?></h3>
			</div>
			<div class="std_form_meddle_meddle floatleft">
				<h2><?php _e('Student Information', 'edu_text_domain');?></h2>
			</div>
			<div class="std_form_meddle_right floatright">		
				<?php if($s_registration_date) : ?>
				<h3><?php _e('Registration Date', 'edu_text_domain');?>: <?php echo $s_registration_date; ?></h3>
				<?php else : ?> 
				<h3><?php _e('Registration Date', 'edu_text_domain');?>: <?php the_time('j/m/Y'); ?></h3>
				<?php endif; ?>
			</div>
		</div>
		<div class="student_info fix">
			<div class="full_width_style fix">
				<p><span><?php _e('Student Name', 'edu_text_domain');?> :</span>  <?php the_title(); ?></p>
			</div>
			<div class="full_width_style fix">
				<div class="half_width_style floatleft">
					<p><span><?php _e('Father Name', 'edu_text_domain');?> :</span>  <?php echo $s_father_student_name; ?></p>
				</div>
				<div class="half_width_style floatleft">
					<p><span><?php _e('Profession', 'edu_text_domain');?> :</span>  <?php echo $s_father_profession_student_name; ?></p>
				</div>
			</div>
			<div class="full_width_style fix">
				<div class="half_width_style floatleft">
					<p><span><?php _e('Mother Name', 'edu_text_domain');?> :</span>  <?php echo $s_mother_student_name; ?></p>
				</div>
				<div class="half_width_style floatleft">
					<p><span><?php _e('Profession', 'edu_text_domain');?> :</span>  <?php echo $s_mother_profession_student_name; ?></p>
				</div>
			</div>
			<div class="full_width_style fix">
				<div class="half_width_style floatleft">
					<p><span><?php _e('Guardian Name', 'edu_text_domain');?> :</span>  <?php echo $s_student_guardian_name; ?></p>
				</div>
				<div class="half_width_style floatleft">
					<p><span><?php _e('Mobile Number', 'edu_text_domain');?> :</span>  <?php echo $s_student_guardian_mo_no; ?></p>
				</div>
			</div>
			<div class="full_width_style fix">
				<div class="half_width_style floatleft">
					<p><span><?php _e('Class Roll', 'edu_text_domain');?> :</span> <?php echo $s_student_class_roll; ?></p>
				</div>
				<div class="half_width_style floatleft">
					<p><span><?php _e('Registration Number', 'edu_text_domain');?> :</span> <?php echo $s_student_registration_no; ?></p>
				</div>
			</div>
			<div class="full_width_style fix">
				<div class="half_width_style floatleft">
					<p><span><?php _e('Date Of Birth', 'edu_text_domain');?> :</span>  <?php echo $s_student_date_of_birth; ?></p>
				</div>
				<div class="half_width_style floatleft">
					<p><span><?php _e('Parent Yearly income', 'edu_text_domain');?> :</span> <?php echo $s_student_yearly_income; ?></p>
				</div>
			</div>
			<div class="full_width_style fix">
				<div class="half_width_style floatleft">
					<p><span><?php _e('Gender', 'edu_text_domain');?> :</span>  <?php echo $s_student_gender; ?></p>
				</div>
				<div class="half_width_style floatleft">
				</div>
			</div>
			<div class="permanent_address fix">
				<h3 ><?php _e('Permanent Address', 'edu_text_domain');?></h3>
				<div class="full_width_style fix">
					<div class="half_width_style floatleft">
						<p><span><?php _e('Village', 'edu_text_domain');?> :</span>  <?php echo $s_student_per_village; ?></p>
					</div>
					<div class="half_width_style floatleft">
						<p><span><?php _e('Post Office', 'edu_text_domain');?> :</span>  <?php echo $s_student_per_post_office; ?></p>						
					</div>
				</div>
				<div class="full_width_style fix">
					<div class="half_width_style floatleft">
						<p><span><?php _e('Upzilla', 'edu_text_domain');?> :</span>  <?php echo $s_student_per_upzilla; ?></p>
					</div>
					<div class="half_width_style floatleft">
						<p><span><?php _e('District', 'edu_text_domain');?> :</span>  <?php echo $s_student_per_district; ?></p>						
					</div>
				</div>
			</div>
			<div class="present_address fix">
				<h3><?php _e('Present Address', 'edu_text_domain');?></h3>
				<div class="full_width_style fix">
					<div class="half_width_style floatleft">
						<p><span><?php _e('Village', 'edu_text_domain');?> :</span>  <?php echo $s_student_pres_village; ?></p>
					</div>
					<div class="half_width_style floatleft">
						<p><span><?php _e('Post Office', 'edu_text_domain');?> :</span>  <?php echo $s_student_pres_post_office; ?></p>						
					</div>
				</div>
				<div class="full_width_style fix">
					<div class="half_width_style floatleft">
						<p><span><?php _e('Upzilla', 'edu_text_domain');?> :</span> <?php echo $s_student_pres_upzilla; ?></p>
					</div>
					<div class="half_width_style floatleft">
						<p><span><?php _e('District', 'edu_text_domain');?> :</span>  <?php echo $s_student_pres_district; ?></p>						
					</div>
				</div>
			</div>
			<div class="full_width_style fix">
				<p><span><?php _e('That was before school', 'edu_text_domain');?> :</span> <?php echo $s_student_before_school_name; ?></p>
			</div>
			<div class="print_button">
				<h2 ><i class="fa fa-print"></i><a href="javascript:window.print()"><?php _e('Print', 'edu_text_domain');?></a></h2>
			</div>

		</div>	
		
