<?php
/**
 * Page Hero
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/

 $title = get_field('title');
 $greenTitle = get_field('green_title');
 $subtitle = get_field('subtitle');



if ( has_post_thumbnail() ) : ?>
	<section class="section hero hero__small">
		<div class="media-container">
			<img class="img-fluid hero-image">
				<?php the_post_thumbnail (); ?>
			</img>
		</div>
		<div class="hero-content">
			<div class="hero-content__info">
				<h1><?php echo $title ?> </h1>
				<p><?php  echo $subtitle ?></p>
			</div>
		</div>

	</section>	
<?php endif; ?>