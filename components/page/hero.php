<?php
/**
 * Page Hero
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/


 if(!is_home() && !is_archive()){
	$title = get_field('title');
	$greenTitle = get_field('green_title');
	$subtitle = get_field('subtitle');
	$bannerText = get_field('banner_text');
	$button = get_field('banner_button');
	$image = get_the_post_thumbnail_url();
 }else{
	$title = get_field('title', get_option( 'page_for_posts' ) );
	$greenTitle = get_field('green_title', get_option( 'page_for_posts' ) );
	$subtitle = get_field('subtitle' , get_option( 'page_for_posts' ) );
	$bannerText = get_field('banner_text', get_option( 'page_for_posts' ));
	$button = get_field('banner_button', get_option( 'page_for_posts' ));
	$image = get_the_post_thumbnail_url(get_option( 'page_for_posts' ));
 }



?>
	<section class="section hero">
		<div class="media-container">
			<img src="<?php echo $image ?>" class="img-fluid hero-image">
		</div>
		<div class="hero-content">
			<div class="hero-content__info">
			<h1><span class="green"><?php echo $greenTitle ?></span><?php echo $title ?> </h1>
			<p><?php  echo $subtitle ?></p>
			</div>
		</div>

	</section>
	
