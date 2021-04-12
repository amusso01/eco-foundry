<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package foundry
 */

get_header();
?>

<?php get_template_part( 'components/page/hero' ) ?>

<main role="main" class=" main archive-main index-main content-block">
	<div id="caseAnchor" ></div>
	<div  class="category-menu">
		<a href="<?php echo site_url('/case-studies'); ?>#caseAnchor" >ALL</a>
	<?php 
	$categories = get_categories();
	foreach($categories as $category) {
		if (is_category($category->term_id )){
			echo '<a class="active"  href="' . get_category_link($category->term_id) . '#caseAnchor">' . $category->name . '</a>';

		}else{
			echo '<a  href="' . get_category_link($category->term_id) . '#caseAnchor">' . $category->name . '</a>';
		}
	}
	?>
	</div>
	<div class="case-tudies__container">
<?php if ( have_posts() ) : ?>



	<?php
	/* Start the Loop */
	while ( have_posts() ) :
		the_post();?>

		<article class="case-study">
					<img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo get_the_title() ?> image">

					<header>
						<div class="case-study__cat">
		
						<?php $cat = get_the_category() ?>
						<?php foreach($cat as $category) : ?>
							<a href="<?php echo get_category_link( $category->term_id); ?>#caseAnchor"><?php echo $category->name ?></a>
						<?php endforeach; ?>
											
						</div>
						<h3><?php echo get_the_title() ?></h3>
					</header><!-- .entry-header -->
				</article>

	<?php 	endwhile;

	

else :

	get_template_part( 'template-parts/content', 'none' );

endif;
?>
</div>
</main><!-- #main -->


<?php
get_footer();
