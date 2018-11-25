<?php global $redux_demo; ?>

<div class="content_left floatleft">
	<?php if($redux_demo['online-admission'] ==1) : ?>
	<div class="left_content_single_widget">
		<h2><?php _e('Online Admission', 'edu_text_domain');?></h2>
		<a href="#"><img src="<?php echo esc_url(get_template_directory_uri());?>/img/online_admission.jpg" alt="" /></a>
	</div>
	<?php endif; ?>
	
	<?php if ($redux_demo['login-panel'] == 1) : ?>
	<div class="left_content_single_widget" id="custome_login_sidebar">
		<h2><i class="fa fa-lock"></i> <?php _e('Login Panel', 'edu_text_domain');?></h2>
		<div class="custom_login_form">							
			<?php								
			if ( ! is_user_logged_in() ) { // Display WordPress login form:
				
				$args = array(
					'redirect' => home_url(), 
					'form_id' => 'loginform-custom',
					'label_username' => __( 'Username', 'edu_text_domain' ),
					'label_password' => __( 'Password', 'edu_text_domain' ),
					'label_remember' => __( 'Remember Me', 'edu_text_domain' ),
					'label_log_in' => __( 'Log In', 'edu_text_domain' ),
					'remember' => true
				);
				wp_login_form( $args );
			} else { // If logged in:
				wp_loginout( home_url() ); // Display "Log Out" link.
				echo " | ";
				wp_register('', ''); // Display "Site Admin" link.
			}								
			?>
			
		</div>

	</div>
	<?php endif;?>
	
	
	<?php if($redux_demo['webmail'] == 1) : ?>
	<div class="left_content_single_widget">
		<h2><?php _e('Web Mail', 'edu_text_domain');?></h2>
		<a href="<?php echo esc_url(site_url());?>/webmail"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/web-mail.png" alt="" /></a>
	</div>
	<?php endif; ?>
	
	<?php if($redux_demo['important-link'] == 1) : ?>
	<div class="left_content_single_widget important_link">
		<h2><i class="fa fa-check-square-o"></i> <?php _e('Important Links', 'edu_text_domain');?></h2>
		<ul class="linkItem">
			<li><a target="_blank" href="http://www.bangladesh.gov.bd"><?php _e('Bangladesh Portal', 'edu_text_domain');?></a></li>
			<li><a target="_blank" href="http://www.moedu.gov.bd"><?php _e('Ministry of Education', 'edu_text_domain');?></a></li>
			<li><a target="_blank" href="http://www.bteb.gov.bd"><?php _e('Bangladesh Technical Education Board', 'edu_text_domain');?></a></li>
			<li><a target="_blank" href="http://www.techedu.gov.bd"><?php _e('Directorate of Technical Education', 'edu_text_domain');?></a></li>
			<li class="last"><a target="_blank" href="http://www.sdp.gov.bd/"><?php _e('Skills Development Project', 'edu_text_domain');?></a></li>
			<li><a target="_blank" href="http://www.buet.ac.bd"><?php _e('Bangladesh University of Engineering &amp; Technology.', 'edu_text_domain');?></a></li>
			<li><a target="_blank" href="http://www.du.ac.bd"><?php _e('University of Dhaka', 'edu_text_domain');?></a></li>
			<li><a target="_blank" href="http://www.nu.edu.bd"><?php _e('National University', 'edu_text_domain');?></a></li>
			<li><a target="_blank" href="http://www.dshe.gov.bd/"><?php _e('Directorate of Secondary &amp; Higher Education', 'edu_text_domain');?></a></li>
			<li><a target="_blank" href="http://180.211.164.131/basictrade/index.php"><?php _e('e-SIF(BTEB)', 'edu_text_domain');?></a></li>

		</ul>
	</div>	
	<?php endif; ?>
	
	
	<div class="left_content_single_widget" id="total_hit">
		<h3><i class="fa fa-laptop"></i> <?php _e('Total Hit', 'edu_text_domain');?></h3>
		<img src="http://hitwebcounter.com/counter/counter.php?page=6095314&style=0001&nbdigits=9&type=page&initCount=0" title="Total Visitor counters" Alt="Total Visitor counters"   border="0" >
	</div>  
	
</div>