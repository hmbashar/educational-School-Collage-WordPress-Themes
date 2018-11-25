<?php 
/*
Template Name: Home
*/

get_header(); ?>

			<?php if($redux_demo['slider-switch'] == 1) : ?>
			<section class="slider_area fix">
				<div class="slider">	
					<div id="main_slider" class="owl-carousel owl-theme">	
						<?php if($redux_demo['home-slider']) : ?>
						<?php 
							$homeslider = $redux_demo['home-slider'];
							foreach ($homeslider as $homepage_slider) {
								echo '<div class="item"><img title="'.$homepage_slider['title'].'" src="'.$homepage_slider['image'].'" alt="'.$homepage_slider['title'].'"></div>';
							}
						?>	
						<?php endif; ?>						
					</div>
				</div>
			</section>
			<?php endif; ?>
			<section class="main_content_area fix">
				<div class="main_content_top column fix">
					<?php get_template_part('left-content');?>
					<?php get_template_part('middle-content');?>
					<?php get_template_part('right-content');?>	
				</div>
				<?php get_template_part('footer-content');?>
			</section>
<?php get_footer();?>