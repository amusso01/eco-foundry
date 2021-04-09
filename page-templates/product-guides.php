<?php
/**
 * Template Name: Products Guides
 *
 * The template for displaying product gguides page
 * 
 * Template Post Type: page
 *
 * @package Strapped
 */

get_header();
?>

<?php get_template_part( 'components/page/hero-small' ) ?>

<main role="main" class=" product-main">
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