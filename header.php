<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
    <head>  	
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		
		<?php global $redux_demo; ?>
		
		<?php wp_head(); ?>
		
    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div class="main_area">
			<header class="header_area fix">
				<div class="header fix column fix">
					<div class="header_left floatleft">
						<div class="header_logo">
						
							<?php if($redux_demo['left-logo'] == 1) : ?>
							<a href="<?php echo esc_url(site_url());?>"><img src="<?php echo $redux_demo['left-logo-upload']['url'];?>" alt="" /></a>
							<?php endif; ?>
							
							<?php if($redux_demo['header-date'] == 1) : ?>
							<p id="FRSDATE"><?php _e( 'Date', 'edu_text_domain' ); ?></p>
							<?php endif; ?>
							
						</div>
					</div>
					<div class="header_center floatleft">
						<?php if($redux_demo['school-name-switch'] == 1) : ?>
						<h1><?php echo $redux_demo ['school-full-name']; ?></h1>
						<?php endif; ?>
						
						<?php if($redux_demo['school-slowgan-switch'] == 1) : ?>
						<h2><?php echo $redux_demo['school-slowgan']; ?></h2>
						<?php endif; ?>
						
					</div>
					<div class="header_right floatright">
						<div class="header_right_logo">
						
							<?php if($redux_demo['right-logo'] == 1) : ?>
							<a href="<?php echo esc_url(site_url());?>"><img src="<?php echo $redux_demo['right-logo-upload']['url']; ?>" alt="" /></a>
							<?php endif; ?>
							
							<?php if($redux_demo['header-time'] == 1) : ?>
							<p id="FRSTIME"><?php _e( 'Time', 'edu_text_domain' ); ?></p>	
							<?php endif; ?>
						</div>
						
					</div>
				</div>
			</header>
			<section class="main_menu_area">
				<div class="column">
					<div class="main_menu column" id="cssmenu">
						<?php
								if (function_exists('my_theme_default_menu')) {
									wp_nav_menu(array(
									'theme_location' => 'main_menu', 								 
									'fallback_cb' => 'my_theme_default_menu',
									'walker' => new CSS_Menu_Maker_Walker(),
									
									));
								}
								else {
									my_theme_default_menu();
								}
							?>
						
					</div>
				</div>
			</section>
			<?php if($redux_demo['notice-board'] == 1) : ?>
			<section class="notich_board fix">
				<div class="notich column fix">
					<div class="notice_text"><?php _e( 'Latest Notice:', 'edu_text_domain' ); ?> </div>
					<marquee onmouseover="stop()" onmouseout="start()">
					
						<?php 
							$notice_post = new WP_Query(array(
								'post_type'		=> 'post', 
								'cat'			=> 6,
								'posts_per_page' => 10,
							));							
						?>
						<?php if($notice_post-> have_posts()) : ?> <?php while ($notice_post->have_posts()) : $notice_post->the_post(); ?> 
						<li><i class="fa fa-angle-right"></i> <a href="<?php the_permalink();?>"><?php the_title();?></a></li>
						<?php endwhile; ?> 
						<?php else : ?> 
						<h3><?php _e('404 Error&#58; Not Found'); ?></h3> 
						<?php endif; ?>		
					</marquee>
				</div>
			</section>
			<?php endif; ?>