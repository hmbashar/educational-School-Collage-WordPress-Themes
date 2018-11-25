<?php get_header(); ?>
<?php
/*
Template Name: AJAX Results Template Example

This is an example of a template part which can be used to customize how search
results appear when using AJAX.
*/

				
?>



<div class="main_search_page column">

<?php 
$my_search = new WP_Advanced_Search('my-form');		
$my_search->the_form();
$query = $my_search->query();
if ( $query->have_posts() ): while ( $query->have_posts() ): $query->the_post(); ?>
	
 <?php the_title(); ?>
   


<?php endwhile; endif; ?>



</div>




<?php get_footer(); ?>