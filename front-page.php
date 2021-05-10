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

$boxes = get_field('boxes');
$darkboxes = get_field('pages');

$imagesTitle = get_field('title_images');
$imagesLogo = get_field('logo_images');
$imagesText = get_field('text_images');
$imagesImages = get_field('images_images');

$partners = get_field('partners');



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

			<?php the_content (); ?>

			<section  class="block-front-boxes" >

				<div class="block-front-boxes__container" >
				<?php foreach($boxes as $box ) :?>
					<div class="front-single-box" style="background-image:url(<?php echo $box['image'] ?>);" >
						<a href="<?php echo $box['box_link']['url'] ?>">
							<div class="text-overlay">
								<p><?php echo $box['text_ovelay'] ?></p>
								<button class="btn btn__white">
									<a href="<?php echo $box['box_link']['url'] ?>" class="button-text"><?php echo $box['box_link']['title'] ?></a>
									<div class="circle">
										<span class="icon arrow"></span>
									</div>
								</button>
							</div>
						</a>
					</div>
				<?php endforeach;  ?>
				</div>

			</section>
			<section  class="block-front-pages" >
					<div class="block-front-pages__container">
						<?php foreach($darkboxes as $singlepage ) : ?>
							<div class="single-page">
								<h3><?php echo $singlepage['title'] ?></h3>
								<p><?php echo $singlepage['excerpt'] ?></p>
								<button class="btn btn__white">
									<a href="<?php echo $singlepage['link']['url'] ?>" class="button-text"><?php echo $singlepage['link']['title'] ?></a>
									<div class="circle">
										<span class="icon arrow"></span>
									</div>
								</button>
							</div>
						<?php endforeach; ?>
					</div>
			</section>
			<section  class="block-front-images content-block" >
				<div class="block-front-images__container ">
					<h2><?php echo $imagesTitle ?></h2>
					<img src="<?php echo $imagesLogo ?>" alt="eco logo">
					<p><?php echo $imagesText ?></p>
				</div>			
			
				
					<div class="singleImage" style="background-image:url('<?php echo $imagesImages ?>)">
						
					</div>
				
			
			</section>
			<section class="block-partners content-block" >
				<div class="block-partners__container ">
				<h5>IN PARTNERSHIP WITH</h5>
				<div class="block-partners__grid">
					<?php foreach($partners as $partner) : ?>
							<div class="single-partners">
								<img src="<?php echo $partner['partner']['url'] ?>" alt="<?php echo $partner['partner']['title'] ?>">
							</div>
						<?php endforeach; ?>
				</div>
				</div>
			</section>

		<?php endwhile; ?>

	<?php else :?>

		<?php get_template_part( 'template-parts/content', 'none' );?>

	<?php endif; ?>

</main>

<?php get_footer(); ?>
