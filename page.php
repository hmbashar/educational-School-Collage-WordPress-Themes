<?php get_header();?>
	<section class="page_area fix column">
		<div class="full_width_page">
			<div class="page_content">
					
				<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>

				<div class="page_title"><h2><?php the_title(); ?></h2></div>

				<?php the_content(); ?>


				<?php endwhile; ?>

				<?php else : ?>

				<h3><?php _e('404 Error&#58; Not Found'); ?></h3>

				<?php endif; ?>



			</div>
		</div>
	</section>
<?php get_footer();?>