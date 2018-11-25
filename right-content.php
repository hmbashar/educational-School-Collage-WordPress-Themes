<?php global $redux_demo; ?>
<div class="content_right floatright">

	<?php if($redux_demo['head-master-switch']) : ?>
	<div class="single_content_right headmaster_style">
		<h2><?php _e('Head Master', 'edu_text_domain');?></h2>
		<img src="<?php echo $redux_demo['headmaster-image']['url'] ;?>" alt="" />
		<h4><?php echo $redux_demo['meadmaster-name']; ?></h4>
		<hr/>
		<div class="headmaster_info">
			<li><i class="fa fa-pencil"></i><a href="<?php echo esc_url($redux_demo['headmaster-opinion']); ?>" title="Message from Headmaster"><?php _e('The teacher\'s opinion', 'edu_text_domain');?></a></li>
			<li><i class="fa fa-user"></i><a href="<?php echo $redux_demo['ex-meadmaster']; ?>" title="Ex Head Master's"><?php _e('Ex Headmasters', 'edu_text_domain'); ?></a></li>
			<?php if($redux_demo['headmaster-webmail']) : ?>
			<li><i class="fa fa-envelope"></i><a href="mailto:<?php echo $redux_demo['headmaster-webmail'] ; ?>" title="<?php echo $redux_demo['headmaster-webmail'] ; ?>"><?php _e('Web Mail', 'edu_text_domain');?></a></li>
			<?php endif; ?>								
			<li><i class="fa fa-phone"></i><a href="tel:<?php echo $redux_demo['meadmaster-phone'];?>" title="<?php echo $redux_demo['meadmaster-phone'];?>"><?php _e('Contact', 'edu_text_domain');?></a></li>
		</div>
	</div>
	<?php endif; ?>						
	<?php if($redux_demo['latest-update-sidebar'] == 1) : ?>
	<div class="single_content_right latest_update_feed">
		<h2><?php _e('Latest Update', 'edu_text_domain');?></h2>							
		<marquee style="height: 200px" onmouseout="this.start();" onmouseover="this.stop();" direction="Up" scrolldelay="180" behavior="SCROLL">
			<div class="scrollnews">
			<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
				<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
			<?php endwhile; ?> 
			<?php else : ?>
			<h4><?php _e('404 Error&#58; Not Found'); ?></h4>
			<?php endif; ?>
				<li><a href="#">Title</a></li>
				<li><a href="#">Title</a></li>
				<li><a href="#">Title</a></li>
				<li><a href="#">Title</a></li>
			</div>
		</marquee>
	</div>
	<?php endif; ?>
	
	<?php if($redux_demo['ssc-sidebar'] == 1) : ?>
	<div class="single_content_right">
		<h2><i class="fa fa-user"></i> <?php _e('S.S.C Corner', 'edu_text_domain');?></h2>
		<ul class="linkItem">
			<?php 
				$ssc_coner_list = new WP_Query(array(
					'post_type'			=> 'post',
					'cat'				=> 9, 
					'posts_per_page'	=> 8,
				));
			?>
			<?php if($ssc_coner_list->have_posts()) : ?><?php while($ssc_coner_list->have_posts())  : $ssc_coner_list->the_post(); ?>
			
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			
			<?php endwhile; ?> 
			<?php else : ?>
			<h4><?php _e('404 Error&#58; Not Found'); ?></h4>
			<?php endif; ?>
		</ul>							
	</div>
	<?php endif; ?>
	
	<?php if ($redux_demo['jsc-sidebar'] == 1) : ?>
	<div class="single_content_right">
		<h2><i class="fa fa-user"></i> <?php _e('J.S.C Corner', 'edu_text_domain');?></h2>
		<ul class="linkItem">
			<?php 
				$jsc_coner_list = new WP_Query(array(
					'post_type'			=> 'post',
					'cat'				=> 8, 
					'posts_per_page'	=> 8,
				));
			?>
			<?php if($jsc_coner_list->have_posts()) : ?><?php while($jsc_coner_list->have_posts())  : $jsc_coner_list->the_post(); ?>
			
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			
			<?php endwhile; ?> 
			<?php else : ?>
			<h4><?php _e('404 Error&#58; Not Found'); ?></h4>
			<?php endif; ?>
		</ul>							
	</div>
	<?php endif; ?>
	
	<?php if($redux_demo['usfull-link-sidebar'] == 1) : ?>
	<div class="single_content_right">
		<h2><i class="fa fa-external-link"></i> <?php _e('Useful Link', 'edu_text_domain');?></h2>
		<ul>
			<li><a target="_blank" href="http://www.moedu.gov.bd"><?php _e('MOE', 'edu_text_domain');?></a></li>
			<li><a target="_blank" href="http://www.dshe.gov.bd"><?php _e('DHSE', 'edu_text_domain');?></a></li>
			<li><a target="_blank" href="http://www.banbeis.gov.bd/"><?php _e('BANBEIS', 'edu_text_domain');?></a></li>
			<li><a target="_blank" href="http://www.mopa.gov.bd/"><?php _e('MOPA', 'edu_text_domain');?></a></li>	
			<li><a target="_blank" href="http://www.emis.gov.bd/"><?php _e('EMIS', 'edu_text_domain');?></a></li>
			<li><a target="_blank" href="http://ictinedubd.ning.com/"><?php _e('NING', 'edu_text_domain');?></a></li>   
		</ul>
	</div>
	<?php endif; ?>
	
</div>