<?php global $redux_demo; ?>
<div class="content_middle floatleft">
	<?php if ($redux_demo['school-name-dis'] == 1) : ?>
	<div class="single_middle_content fix">
		<h2><?php echo $redux_demo['school-name-and-district']; ?></h2>
		<img src="<?php echo $redux_demo['school-gate-image']['url']; ?>" alt="" />
		<p><?php echo $redux_demo['school-about']; ?></p>
		<a class="school_name_readmore floatright" href="<?php echo $redux_demo['school-about-full-link'] ; ?>"><?php _e('Read More', 'edu_text_domain');?></a>
	</div>
	<?php endif; ?>
	
	<div class="single_middle_content_hub fix">
	
		<?php if($redux_demo['download-corner'] == 1) : ?>
		<div class="middle_content_hub floatleft">
			<h2><?php _e('Download Corner', 'edu_text_domain');?></h2>
			<marquee style="height: 200px" onmouseout="this.start();" onmouseover="this.stop();" direction="Up" scrolldelay="180" behavior="SCROLL">
			<div class="scrollnews">
				<?php 
					$download_coner_list = new WP_Query(array(
						'post_type'			=> 'post',
						'cat'				=> 7, 
						'posts_per_page'	=> 8,
					));
				?>
				<?php if($download_coner_list->have_posts()) : ?><?php while($download_coner_list->have_posts())  : $download_coner_list->the_post(); ?>
				
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				
				<?php endwhile; ?> 
				<?php else : ?>
				<h4><?php _e('404 Error&#58; Not Found'); ?></h4>
				<?php endif; ?>
			</div>
			</marquee>
		</div>
		<?php endif; ?>
		
		<?php if($redux_demo['notice-corner'] == 1) :?>
		<div class="middle_content_hub floatright">
			<h2><?php _e('Notice Board', 'edu_text_domain');?></h2>														
			<marquee style="height: 200px" onmouseout="this.start();" onmouseover="this.stop();" direction="Down" scrolldelay="180" behavior="SCROLL">
				<div class="scrollnews">
				<?php 
					$notice_coner_list = new WP_Query(array(
						'post_type'			=> 'post',
						'cat'				=> 6, 
						'posts_per_page'	=> 8,
					));
				?>
				<?php if($notice_coner_list->have_posts()) : ?><?php while($notice_coner_list->have_posts())  : $notice_coner_list->the_post(); ?>
				
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				
				<?php endwhile; ?> 
				<?php else : ?>
				<h4><?php _e('404 Error&#58; Not Found'); ?></h4>
				<?php endif; ?>
				</div>
			</marquee>
		</div>
		<?php endif; ?>
	</div>
	<div class="single_middle_content_hub fix">
	
		<?php if($redux_demo['jsc-corner'] == 1) : ?>
		<div class="middle_content_hub floatleft">
			<h2><?php _e('J.S.C Corner', 'edu_text_domain');?></h2>														
			<marquee style="height: 200px" onmouseout="this.start();" onmouseover="this.stop();" direction="Up" scrolldelay="180" behavior="SCROLL">
			<div class="scrollnews">
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
			</div>
			</marquee>
		</div>
		<?php endif; ?>
		
		<?php if($redux_demo['ssc-corner'] == 1) : ?>
		<div class="middle_content_hub floatright">
			<h2><?php _e('S.S.C Corner', 'edu_text_domain');?></h2>														
			<marquee style="height: 200px" onmouseout="this.start();" onmouseover="this.stop();" direction="Down" scrolldelay="180" behavior="SCROLL">
				<div class="scrollnews">
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
				</div>
			</marquee>
		</div>
		<?php endif; ?>
		
	</div>
	<div class="single_middle_content_hub fix">
	
		<?php if($redux_demo['students-corner'] == 1) : ?>
		<div class="middle_content_hub floatleft">
			<h2><?php _e('Students Corner', 'edu_text_domain');?></h2>
			<ul>
				<?php 
					$students_coner_list = new WP_Query(array(
						'post_type'			=> 'post',
						'cat'				=> 10, 
						'posts_per_page'	=> 8,
					));
				?>
				<?php if($students_coner_list->have_posts()) : ?><?php while($students_coner_list->have_posts())  : $students_coner_list->the_post(); ?>
				
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				
				<?php endwhile; ?> 
				<?php else : ?>
				<h4><?php _e('404 Error&#58; Not Found'); ?></h4>
				<?php endif; ?>
			</ul>
			
		</div>
		<?php endif; ?>
		
		<?php if($redux_demo['guardian-corner'] == 1) : ?>
		<div class="middle_content_hub floatright">
			<h2><?php _e('Guardian Corner', 'edu_text_domain');?></h2>	
				<ul>
					<?php 
						$guardian_coner_list = new WP_Query(array(
							'post_type'			=> 'post',
							'cat'				=> 11, 
							'posts_per_page'	=> 8,
						));
					?>
					<?php if($guardian_coner_list->have_posts()) : ?><?php while($guardian_coner_list->have_posts())  : $guardian_coner_list->the_post(); ?>
					
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					
					<?php endwhile; ?> 
					<?php else : ?>
					<h4><?php _e('404 Error&#58; Not Found'); ?></h4>
					<?php endif; ?>
				</ul>
		</div>
		<?php endif; ?>
		
	</div>
	
	<?php if($redux_demo['teacher-corner'] == 1) : ?>
	<div class="teachers_area fix">
		<div class="teachers">
			<h2><?php _e('Our Teacher\'s', 'edu_text_domain');?></h2>
			<div class="teacher">
				<marquee onmouseover="stop()" onmouseout="start()">
					<?php 
						$teacher_list = new WP_Query(array(
							'post_type'			=> 'teachers',
							'posts_per_page'	=> 10,
							'teacher_cat'		=> 'Current Working',
						));
						
					?>
					<?php if($teacher_list->have_posts()) : ?><?php while($teacher_list->have_posts())  : $teacher_list->the_post();
					$index_teacher_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'index_teacher_img' );
					?>
					
						<div class="single_teachars floatleft"><a title="<?php the_title();?>" href="<?php the_permalink();?>"><img src="<?php echo $index_teacher_img[0]; ?>" alt="" /></a></div>
						
					<?php endwhile; ?> 
					<?php else : ?>
						<div class="single_teachars floatleft"><a href=""><img src="<?php echo esc_url(get_template_directory_uri());?>/img/teacher_image.png" alt="" /></a></div>
						<div class="single_teachars floatleft"><a href=""><img src="<?php echo esc_url(get_template_directory_uri());?>/img/teacher_image.png" alt="" /></a></div>
						<div class="single_teachars floatleft"><a href=""><img src="<?php echo esc_url(get_template_directory_uri());?>/img/teacher_image.png" alt="" /></a></div>
						<div class="single_teachars floatleft"><a href=""><img src="<?php echo esc_url(get_template_directory_uri());?>/img/teacher_image.png" alt="" /></a></div>
					<?php endif; ?>										
				</marquee>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<?php if($redux_demo['students-a-plus'] == 1) : ?>
	<div class="teachers_area fix">
		<div class="teachers">
			<h2><?php _e('Students Receive A +', 'edu_text_domain');?></h2>
			<div class="teacher">
				<marquee onmouseover="stop()" onmouseout="start()" direction="right">
					<?php 
						$student_list = new WP_Query(array(
							'post_type'			=> 'student',
							'posts_per_page'	=> 10,
							'student_cat'		=> 'A Plus',
						));
						
					?>
					<?php if($student_list->have_posts()) : ?><?php while($student_list->have_posts())  : $student_list->the_post();
					$index_student_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'index_student_img' );
					?>
						<div class="single_teachars floatleft"><a title="<?php the_title();?>" href="<?php the_permalink();?>"><img src="<?php echo $index_student_img[0];?>" alt="" /></a></div>

					<?php endwhile; ?> 
					<?php else : ?>
						<div class="single_teachars floatleft"><a href=""><img src="<?php echo esc_url(get_template_directory_uri());?>/img/teacher_image.png" alt="" /></a></div>
						<div class="single_teachars floatleft"><a href=""><img src="<?php echo esc_url(get_template_directory_uri());?>/img/teacher_image.png" alt="" /></a></div>
						<div class="single_teachars floatleft"><a href=""><img src="<?php echo esc_url(get_template_directory_uri());?>/img/teacher_image.png" alt="" /></a></div>
						<div class="single_teachars floatleft"><a href=""><img src="<?php echo esc_url(get_template_directory_uri());?>/img/teacher_image.png" alt="" /></a></div>		
					<?php endif; ?>	
				</marquee>
			</div>
		</div>
	</div>
	<?php endif; ?>
	
	
</div>					
