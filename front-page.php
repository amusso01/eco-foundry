<?php
/**
 * The template for displaying frontpage by default
 *
 * @author Andrea Musso
 *
 * @package foundry
 */
$video = get_field('video_background');
$slider = get_field('slider_image');
$title = get_field('home_title');
$button = get_field('button_link');


get_header();
?>

<section class="section hero">
	<div class="video-container">
		<video autoplay muted loop>
			<source src="<?php echo $video['url'] ?>" type="video/mp4">
			Your browser does not support the video tag.
		</video>
	</div>
	<!-- <div class="media-container">
		<img src="<?php echo $image ?>" class="img-fluid hero-image">
		
	</div> -->
	<div class="hero-content">
		<div class="hero-content__info">
			<h1 class="home-title"><?php echo $title ?> </h1>
			<button class="btn btn__white">
				<a href="<?php echo $button['url'] ?>" class="button-text"><?php echo $button['title'] ?></a>
				<div class="circle">
					<span class="icon arrow"></span>
				</div>
			</button>
		</div>
	</div>

</section>

<main class="main homepage-main" role="main">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); // @codingStandardsIgnoreLine ?>

			<?php get_template_part( 'template-parts/content', 'front' ) ?>

		<?php endwhile; ?>

	<?php else :?>

		<?php get_template_part( 'template-parts/content', 'none' );?>

	<?php endif; ?>

</main>

<?php get_footer(); ?>
