<?php 
get_header();
/*
Template Name: Contact-us
*/
?>
<div class="contact_area fix">
	<div class="contact fix">
		<div class="contact_content_area fix">
			<div class="contact_content fix column">
				<div class="contact_info_top fix">
					<h2><?php _e('Contact Info', 'edu_text_domain');?></h2>
				</div>
				<div class="contact_info_bottom fix">
					<div class="contact_info_single floatleft">
						<i class="fa fa-home"></i>
						<h3 class="contact_address"><?php _e('Address', 'edu_text_domain');?></h3>	
						<?php echo $redux_demo['school-address'];?>
					</div>
					<div class="contact_info_single floatleft">
						<i class="fa fa-envelope"></i>
						<h3 class="contact_address"><?php _e('Email', 'edu_text_domain');?></h3>
						<?php echo $redux_demo['school-contact-email'];?>
					</div>
					<div class="contact_info_single floatleft">
						<i class="fa fa-phone"></i>
						<h3 class="contact_address"><?php _e('Phone', 'edu_text_domain');?></h3>
						<?php echo $redux_demo['school-contact-phone'] ; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="contact_map_area fix">
			<div class="contact_map fix">
				<div class="contact_map_title column fix">
					<h2>You Can Find Us Here</h2>
				</div>
				<div class="contact_map_map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1844.937045209295!2d90.3236737202341!3d22.358382568860865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30aac716126c838b%3A0x3037b737ce3f3834!2sPC+Help+Center!5e0!3m2!1sen!2sbd!4v1432876698020"  frameborder="0" style="border:0"></iframe>
				</div>
			</div>
		</div>
		<div class="contact_from_area fix">
			<div class="contact_form column ">
				<div class="contact_form_title">
					<h2>Send Mail to us</h2>
				</div>
				<div class="contact_form_form">
					<?php echo do_shortcode('[contact-form-7 id="68" title="Contact_from"]');?>
				</div>
			</div>
		</div>
		
	</div>
</div>

<?php get_footer();?>
