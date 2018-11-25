<?php get_header(); ?>
			<section class="main_content_area fix">
				<div class="main_content_top column fix">
					<?php get_template_part('left-content');?>	
					<div class="content_middle floatleft">
						<div class="single_page_area">								
							<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>

							<div class="page_title"><h2><?php the_title(); ?></h2></div>

							<?php the_content(); ?>


							<?php endwhile; ?>

							<?php else : ?>

							<h3><?php _e('404 Error&#58; Not Found'); ?></h3>

							<?php endif; ?>
						</div>

						
					</div>					
					
					<?php get_template_part('right-content');?>	
				</div>
					<?php get_template_part('footer-content');?>
			</section>
<?php get_footer();?>