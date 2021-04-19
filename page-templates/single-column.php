<?php
/**
 * Template Name: Single Column
 *
 * The template for displaying single co,=lumn
 * 
 * Template Post Type: page
 *
 * @package Strapped
 */

get_header();
?>


<main role="main" class="single-column-main content-block">
	<h1><?php echo get_the_title( ) ?></h1>
<?php

if ( have_posts() ) :

	the_content();

else :

	get_template_part( 'template-parts/content', 'none' );

endif;
?>

</main><!-- #main -->


<?php
get_footer();