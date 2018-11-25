<!--
<?php get_header(); ?>

			<?php if($redux_demo['slider-switch'] == 1) : ?>
			<section class="slider_area fix">
				<div class="slider">	
					<div id="main_slider" class="owl-carousel owl-theme">	

						<?php 
							$homeslider = $redux_demo['home-slider'];
							foreach ($homeslider as $homepage_slider) {
								echo '<div class="item"><img title="'.$homepage_slider['title'].'" src="'.$homepage_slider['image'].'" alt="'.$homepage_slider['title'].'"></div>';
							}
						?>
					
						
										 
					</div>
				</div>
			</section>
			<?php endif; ?>
			<section class="main_content_area fix">
				<div class="main_content_top column fix">
					<div class="content_left floatleft">
						<?php if($redux_demo['online-admission'] ==1) : ?>
						<div class="left_content_single_widget">
							<h2>Online Admission</h2>
							<a href="#"><img src="<?php echo esc_url(get_template_directory_uri());?>/img/online_admission.jpg" alt="" /></a>
						</div>
						<?php endif; ?>
						
						<?php if ($redux_demo['login-panel'] == 1) : ?>
						<div class="left_content_single_widget" id="custome_login_sidebar">
							<h2><i class="fa fa-lock"></i> Login Panel</h2>
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
							<h2>Web Mail</h2>
							<a href="<?php echo esc_url(site_url());?>/webmail"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/web-mail.png" alt="" /></a>
						</div>
						<?php endif; ?>
						
						<?php if($redux_demo['important-link'] == 1) : ?>
						<div class="left_content_single_widget important_link">
							<h2><i class="fa fa-check-square-o"></i> Important Links</h2>
							<ul class="linkItem">
								<li><a target="_blank" href="http://www.bangladesh.gov.bd">Bangladesh Portal</a></li>
								<li><a target="_blank" href="http://www.moedu.gov.bd">Ministry of Education</a></li>
								<li><a target="_blank" href="http://www.bteb.gov.bd">Bangladesh Technical Education Board</a></li>
								<li><a target="_blank" href="http://www.techedu.gov.bd">Directorate of Technical Education</a></li>
								<li class="last"><a target="_blank" href="http://www.sdp.gov.bd/">Skills Development Project</a></li>
								<li><a target="_blank" href="http://www.buet.ac.bd">Bangladesh University of Engineering &amp; Technology.</a></li>
								<li><a target="_blank" href="http://www.du.ac.bd">University of Dhaka</a></li>
								<li><a target="_blank" href="http://www.nu.edu.bd">National University</a></li>
								<li><a target="_blank" href="http://www.dshe.gov.bd/">Directorate of Secondary &amp; Higher Education</a></li>
								<li><a target="_blank" href="http://180.211.164.131/basictrade/index.php">e-SIF(BTEB)</a></li>

							</ul>
						</div>	
						<?php endif; ?>
						
						
						<div class="left_content_single_widget" id="total_hit">
							<h3><i class="fa fa-laptop"></i> Total Hit</h3>
							<img src="http://hitwebcounter.com/counter/counter.php?page=6095314&style=0001&nbdigits=9&type=page&initCount=0" title="Total Visitor counters" Alt="Total Visitor counters"   border="0" >
						</div>  
						
					</div>
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
								<h2>Download Corner</h2>														
								<marquee style="height: 200px" onmouseout="this.start();" onmouseover="this.stop();" direction="Up" scrolldelay="180" behavior="SCROLL">
								<div class="scrollnews">
									<li><a href="#">Title</a></li>
									<li><a href="#">Title</a></li>
									<li><a href="#">Title</a></li>
									<li><a href="#">Title</a></li>
									<li><a href="#">Title</a></li>
								</div>
								</marquee>
							</div>
							<?php endif; ?>
							
							<?php if($redux_demo['notice-corner'] == 1) :?>
							<div class="middle_content_hub floatright">
								<h2>Notice Board</h2>														
								<marquee style="height: 200px" onmouseout="this.start();" onmouseover="this.stop();" direction="Down" scrolldelay="180" behavior="SCROLL">
									<div class="scrollnews">
										<li><a href="#">Title</a></li>
										<li><a href="#">Title</a></li>
										<li><a href="#">Title</a></li>
										<li><a href="#">Title</a></li>
										<li><a href="#">Title</a></li>
									</div>
								</marquee>
							</div>
							<?php endif; ?>
						</div>
						<div class="single_middle_content_hub fix">
						
							<?php if($redux_demo['jsc-corner'] == 1) : ?>
							<div class="middle_content_hub floatleft">
								<h2>J.S.C Corner</h2>														
								<marquee style="height: 200px" onmouseout="this.start();" onmouseover="this.stop();" direction="Up" scrolldelay="180" behavior="SCROLL">
								<div class="scrollnews">
									<li><a href="#">Title</a></li>
									<li><a href="#">Title</a></li>
									<li><a href="#">Title</a></li>
									<li><a href="#">Title</a></li>
									<li><a href="#">Title</a></li>
								</div>
								</marquee>
							</div>
							<?php endif; ?>
							
							<?php if($redux_demo['ssc-corner'] == 1) : ?>
							<div class="middle_content_hub floatright">
								<h2>S.S.C Corner</h2>														
								<marquee style="height: 200px" onmouseout="this.start();" onmouseover="this.stop();" direction="Down" scrolldelay="180" behavior="SCROLL">
									<div class="scrollnews">
										<li><a href="#">Title</a></li>
										<li><a href="#">Title</a></li>
										<li><a href="#">Title</a></li>
										<li><a href="#">Title</a></li>
										<li><a href="#">Title</a></li>
									</div>
								</marquee>
							</div>
							<?php endif; ?>
							
						</div>
						<div class="single_middle_content_hub fix">
						
							<?php if($redux_demo['students-corner'] == 1) : ?>
							<div class="middle_content_hub floatleft">
								<h2>Students Corner</h2>
								<ul>
									<li><a href="#">Title</a></li>
									<li><a href="#">Title</a></li>
									<li><a href="#">Title</a></li>
									<li><a href="#">Title</a></li>
									<li><a href="#">Title</a></li>
								</ul>
								
							</div>
							<?php endif; ?>
							
							<?php if($redux_demo['guardian-corner'] == 1) : ?>
							<div class="middle_content_hub floatright">
								<h2>Guardian Corner</h2>	
									<ul>
										<li><a href="#">Title</a></li>
										<li><a href="#">Title</a></li>
										<li><a href="#">Title</a></li>
										<li><a href="#">Title</a></li>
										<li><a href="#">Title</a></li>
									</ul>
							</div>
							<?php endif; ?>
							
						</div>
						
						<?php if($redux_demo['teacher-corner'] == 1) : ?>
						<div class="teachers_area fix">
							<div class="teachers">
								<h2>Our Teacher's</h2>
								<div class="teacher">
									<marquee onmouseover="stop()" onmouseout="start()">
										<div class="single_teachars floatleft"><img src="<?php echo esc_url(get_template_directory_uri());?>/img/teacher_image.png" alt="" /></div>
										<div class="single_teachars floatleft"><img src="<?php echo esc_url(get_template_directory_uri());?>/img/teacher_image.png" alt="" /></div>
										<div class="single_teachars floatleft"><img src="<?php echo esc_url(get_template_directory_uri());?>/img/teacher_image.png" alt="" /></div>
										<div class="single_teachars floatleft"><img src="<?php echo esc_url(get_template_directory_uri());?>/img/teacher_image.png" alt="" /></div>
										<div class="single_teachars floatleft"><img src="<?php echo esc_url(get_template_directory_uri());?>/img/teacher_image.png" alt="" /></div>
										<div class="single_teachars floatleft"><img src="<?php echo esc_url(get_template_directory_uri());?>/img/teacher_image.png" alt="" /></div>
									</marquee>
								</div>
							</div>
						</div>
						<?php endif; ?>
						<?php if($redux_demo['students-a-plus'] == 1) : ?>
						<div class="teachers_area fix">
							<div class="teachers">
								<h2>Students Receive A +</h2>
								<div class="teacher">
									<marquee onmouseover="stop()" onmouseout="start()" direction="right">
										<div class="single_teachars floatleft"><img src="<?php echo esc_url(get_template_directory_uri());?>/img/teacher_image.png" alt="" /></div>
										<div class="single_teachars floatleft"><img src="<?php echo esc_url(get_template_directory_uri());?>/img/teacher_image.png" alt="" /></div>
										<div class="single_teachars floatleft"><img src="<?php echo esc_url(get_template_directory_uri());?>/img/teacher_image.png" alt="" /></div>
										<div class="single_teachars floatleft"><img src="<?php echo esc_url(get_template_directory_uri());?>/img/teacher_image.png" alt="" /></div>
										<div class="single_teachars floatleft"><img src="<?php echo esc_url(get_template_directory_uri());?>/img/teacher_image.png" alt="" /></div>
										<div class="single_teachars floatleft"><img src="<?php echo esc_url(get_template_directory_uri());?>/img/teacher_image.png" alt="" /></div>
									</marquee>
								</div>
							</div>
						</div>
						<?php endif; ?>
						
						
					</div>					
					
					<div class="content_right floatright">
					
						<?php if($redux_demo['head-master-switch']) : ?>
						<div class="single_content_right headmaster_style">
							<h2>Head Master</h2>
							<img src="<?php echo $redux_demo['headmaster-image']['url'] ;?>" alt="" />
							<h4><?php echo $redux_demo['meadmaster-name']; ?></h4>
							<hr/>
							<div class="headmaster_info">
								<li><i class="fa fa-pencil"></i><a href="<?php echo $redux_demo['headmaster-opinion']; ?>" title="Message from Headmaster"><?php _e('The teacher\'s opinion', 'edu_text_domain');?></a></li>
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
							<h2>Latest Update</h2>							
							<marquee style="height: 200px" onmouseout="this.start();" onmouseover="this.stop();" direction="Up" scrolldelay="180" behavior="SCROLL">
								<div class="scrollnews">
									<li><a href="#">Title</a></li>
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
							<h2><i class="fa fa-user"></i> S.S.C Corner</h2>
							<ul class="linkItem">
								<li><a target="_blank" href="#">S.S.C Results</a></li>	
								<li><a target="_blank" href="#">S.S.C Results</a></li>	
								<li><a target="_blank" href="#">S.S.C Results</a></li>	
								<li><a target="_blank" href="#">S.S.C Results</a></li>	
								<li><a target="_blank" href="#">S.S.C Results</a></li>	
							</ul>							
						</div>
						<?php endif; ?>
						
						<?php if ($redux_demo['jsc-sidebar'] == 1) : ?>
						<div class="single_content_right">
							<h2><i class="fa fa-user"></i> J.S.C Corner</h2>
							<ul class="linkItem">
								<li><a target="_blank" href="#">J.S.C Results</a></li>	
								<li><a target="_blank" href="#">J.S.C Results</a></li>	
								<li><a target="_blank" href="#">J.S.C Results</a></li>	
								<li><a target="_blank" href="#">J.S.C Results</a></li>	
								<li><a target="_blank" href="#">J.S.C Results</a></li>	
							</ul>							
						</div>
						<?php endif; ?>
						
						<?php if($redux_demo['usfull-link-sidebar'] == 1) : ?>
						<div class="single_content_right">
							<h2><i class="fa fa-external-link"></i> Useful Link</h2>
							<ul>
								<li><a target="_blank" href="http://www.moedu.gov.bd">MOE</a></li>
								<li><a target="_blank" href="http://www.dshe.gov.bd">DHSE</a></li>
								<li><a target="_blank" href="http://www.banbeis.gov.bd/">BANBEIS</a></li>
								<li><a target="_blank" href="http://www.mopa.gov.bd/">MOPA</a></li>	
								<li><a target="_blank" href="http://www.emis.gov.bd/">EMIS</a></li>
								<li><a target="_blank" href="http://ictinedubd.ning.com/">NING</a></li>   
							</ul>
						</div>
						<?php endif; ?>
						
					</div>
				</div>
				<div class="main_content_bottom_area fix column">
					<div class="main_content_bottom">
					
						<?php if($redux_demo['photo-gallery-switch'] ==1) : ?>
						<div class="single_main_content_bottom floatleft">
							<h2>Our Photo Gallery</h2>
							<div class="photos_gallery" id="photos_gallery">								
								<div class="single_main_content_photo"><div class="item"><img src="<?php echo esc_url(get_template_directory_uri());?>/img/photo_gallery_1.jpg" alt="The Last of us"></div></div>
								<div class="single_main_content_photo"><div class="item"><img src="<?php echo esc_url(get_template_directory_uri());?>/img/photo_gallery_2.jpg" alt="The Last of us"></div></div>
								<div class="single_main_content_photo"><div class="item"><img src="<?php echo esc_url(get_template_directory_uri());?>/img/photo_gallery_3.jpg" alt="The Last of us"></div></div>
								<div class="single_main_content_photo"><div class="item"><img src="<?php echo esc_url(get_template_directory_uri());?>/img/photo_gallery_4.jpg" alt="The Last of us"></div></div>
								
							</div>
							<a href="#" class="photos_gallery_readmore"><?php _e('More Photos', 'edu_text_domain');?></a>
						</div>
						<?php endif; ?>
						
						<?php if($redux_demo['video-gallery-switch'] == 1) : ?>
						<div class="single_main_content_bottom floatright">
							<h2>Our Videos Gallery</h2>
							<div class="single_main_content_video" id="videos_gallery">
								<div class="item"><iframe src="https://www.youtube.com/embed/jmmeKXM-wq4" frameborder="0" allowfullscreen></iframe></div>
								<div class="item"><iframe src="https://www.youtube.com/embed/jmmeKXM-wq4" frameborder="0" allowfullscreen></iframe></div>
								<div class="item"><iframe src="https://www.youtube.com/embed/jmmeKXM-wq4" frameborder="0" allowfullscreen></iframe></div>
								<div class="item"><iframe src="https://www.youtube.com/embed/jmmeKXM-wq4" frameborder="0" allowfullscreen></iframe></div>
							</div>
							<a href="#" class="photos_gallery_readmore"><?php _e('More Videos', 'edu_text_domain');?></a>
						</div>
						<?php endif; ?>
						
					</div>
				</div>
			</section>
<?php get_footer();?>
-->