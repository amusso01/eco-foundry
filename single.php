<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package foundry
 */

get_header();
?>

	<div id="primary" class="container content-area">
		<div class="row">
			<main id="main" class="post-main content-block">

			<div class="post-hero">
				<?php the_post_thumbnail(  ) ?>
			</div>
			<?php
			while ( have_posts() ) :
				the_post();?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('post-article'); ?>>
				<header class="entry-header">
					<?php
					if ( is_singular() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;
					?>
				</header><!-- .entry-header -->

			</article><!-- #post-<?php the_ID(); ?> -->
			<?php 
			the_content();
				// the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;

			endwhile; // End of the loop.
			?>

			</main><!-- #main -->

			<?php get_sidebar(); ?>

		</div>
	</div><!-- #primary -->

<?php
get_footer();
