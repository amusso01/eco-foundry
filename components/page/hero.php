<?php
/**
 * Page Hero
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/

 $title = get_field('title');
 $subtitle = get_field('subtitle');
 $bannerText = get_field('banner_text');
 $button = get_field('banner_button');



if ( has_post_thumbnail() ) : ?>
	<section class="section hero">
		<div class="media-container">
			<img class="img-fluid hero-image">
				<?php the_post_thumbnail (); ?>
			</img>
		</div>
		<div class="hero-content">
			<div class="hero-content__info">
				<h1><?php echo $title ?></h1>
				<p><?php  echo $subtitle ?></p>
			</div>
		</div>

	</section>
	<div class="main-hero-banner ">
		<div class="hero-banner__container content-block">
			<div class="text">
				<p><?php echo $bannerText ?></p>
				
			</div>
			<button class="btn btn__white">
					<a href="" class="button-text"><?php echo $button['title'] ?></a>
					<div class="circle">
						<span class="icon arrow"></span>
					</div>
			</button>
		</div>
	</div>	
<?php endif; ?>