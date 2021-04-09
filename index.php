<?php
/**
 * The index file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @author Andrea Musso
 *
 * @package foundry
 */

get_header();
?>

<?php get_template_part( 'components/page/hero' ) ?>

<main role="main" class=" main index-main">
	<?php 
	$categories = get_categories();
	foreach($categories as $category) {
	   echo '<div class="col-md-4"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
	}
	?>
	<div class="case-tudies__container">
		<?php
		if ( have_posts() ) :?>

		<?php
			/* Start the Loop */
			while ( have_posts() ) :

				the_post();
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
	</div>

</main><!-- #main -->


<?php
get_footer();
