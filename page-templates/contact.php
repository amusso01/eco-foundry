<?php
/**
 * Template Name: Contact
 *
 * The template for displaying contact page
 * 
 * Template Post Type: page
 *
 * @package Strapped
 */

get_header();
?>

<?php get_template_part( 'components/page/hero-small' ) ?>

<main role="main" class=" contact-main content-block">
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