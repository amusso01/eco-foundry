<?php
/**
 * Requires ACF Version 5.8+
 *
 * @author      Andrea Musso
 *
 *
 */



 /*==================================================================================
   team, Preset ACF Gutenberg Block
 ==================================================================================*/

 /* Register ACF Block
 /––––––––––––––––––––––––*/
 if( function_exists('acf_register_block') ) {

 	$result = acf_register_block(array(
 		'name'				     => 'fd_team',
 		'title'				     => __('Team'),
 		'description'		   => __('Team block'),
 		'render_callback'	 => 'foundry_gutenblock_team',
 		'category'		     => 'fd-category', // common, formatting, layout, widgets, embed
 		'icon' => array(
            // Specifying a background color to appear with the icon e.g.: in the inserter.
            'background' => '#fff ',
            // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
            'foreground' => '#22D761',
            // Specifying a dashicon for the block
            'src' => 'media-spreadsheet',
            'mode'              => 'edit',
            'align'             => 'full',
            ),
 		'keywords'		     => ['fd', 'team', 'image']
 	));
 }

 /* Render Block
 /––––––––––––––––––––––––*/
 function foundry_gutenblock_team() {
    
    // Option vars
    $backgroundColor = get_field('background_color');
    $anchorLink = get_field('anchor_point');
    $anchorLink = strtolower(trim( $anchorLink));

    // Get Vars
    $title = get_field('title');
    $carousel = get_field('carousel');


    // Return HTML

    ?>
    <div id="<?php echo $anchorLink ?>"></div>
    <section class="block-team content-block" id="blockTeam" style="background-color:<?php echo $backgroundColor ?>" >
        <div class="block-team__container ">
            <h2><?php echo $title ?></h2>
             <!-- Swiper -->
            <div class="swiper-container gallery-top">
                <div class="swiper-wrapper">
                    <?php foreach($carousel as $member ) :?>
                    <div class="swiper-slide gallery-top__container">
                        <img src="<?php echo $member['image'] ?>" alt="<?php echo $member['name'] ?> picture">
                        <div class="description">
                            <p class="name"><?php echo $member['name'] ?></p>
                            <p class="role"><?php echo $member['role'] ?></p>
                            <p class="bio"  ><?php echo $member['description'] ?></p>
                            <a href="<?php echo $member['social'] ?>" style="margin-top:50px;display:inline-block;" rel="noopener noreferrer" to target="_blank"><?php get_template_part( 'svg-template/svg', 'linkedin' ) ?></a>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next">NEXT</div>
            </div>
            <div class="swiper-container gallery-thumbs">
                <div class="swiper-wrapper">
                <?php foreach($carousel as $member ) :?>
                    <div class="swiper-slide" style="background-image:url(<?php  echo $member['image']?>)"></div>
                <?php endforeach; ?>
                </div>
            </div>   
        </div>
    </section>


<?php
}

   
 
