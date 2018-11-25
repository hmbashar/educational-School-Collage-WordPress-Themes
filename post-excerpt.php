<?php
/**
 * The template for displaying post excerpts. 
 *
 * @package WordPress
 * @subpackage bilanti
 */
?>

<?php if(have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>		
	<div class="single_post">
		<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
		<div class="post_meta">
			<p><?php the_time('M d, Y') ?></p>
		</div>
		<?php the_excerpt(); ?> 
	</div>
<?php endwhile; ?>	
<?php endif; ?>

<?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } else { include('navigation.php'); } ?>