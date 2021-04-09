<?php
/**
 * Page Hero
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/


 if(!is_home()){
	$title = get_field('title');
	$subtitle = get_field('subtitle');
	$bannerText = get_field('banner_text');
	$button = get_field('banner_button');
 }else{
	$title = get_field('title', get_option( 'page_for_posts' ) );
	$subtitle = get_field('subtitle' , get_option( 'page_for_posts' ) );
	$bannerText = get_field('banner_text', get_option( 'page_for_posts' ));
	$button = get_field('banner_button', get_option( 'page_for_posts' ));
 }



?>
	<section class="section hero">
		<div class="media-container">
			<img src="<?php echo get_the_post_thumbnail_url(get_option( 'page_for_posts' )) ?>" class="img-fluid hero-image">
				
			
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
