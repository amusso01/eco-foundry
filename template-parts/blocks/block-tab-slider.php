<?php
/**
 * Requires ACF Version 5.8+
 *
 * @author      Andrea Musso
 *
 *
 */



 /*==================================================================================
   tabSlider, Preset ACF Gutenberg Block
 ==================================================================================*/

 /* Register ACF Block
 /––––––––––––––––––––––––*/
 if( function_exists('acf_register_block') ) {

 	$result = acf_register_block(array(
 		'name'				     => 'fd_tabSlider',
 		'title'				     => __('Tab Slider'),
 		'description'		   => __('Tab Slider block'),
 		'render_callback'	 => 'foundry_gutenblock_tabSlider',
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
 		'keywords'		     => ['fd', 'Tab', 'tab', 'slider', 'image']
 	));
 }

 /* Render Block
 /––––––––––––––––––––––––*/
 function foundry_gutenblock_tabSlider() {
    
    // Option vars
    $anchor = get_field('anchor_point');
    // Get Vars
    $title = get_field('block_title');
    $sliders = get_field('slider_tab');

    


    // Return HTML

    ?>
    <div id="<?php echo   strtolower(trim($anchor));  ?>"></div>
    <section class="block-tabSlider" id="blocktabSlider" >
        <div class="block-tabSlider__container content-block">
            <h2><?php echo $title ?></h2>
            <ul class=" gallery-nav">
                <?php foreach($sliders as $key => $slider) :?>
                    <li class="menuItem <?php echo $key===0 ? 'active' : '' ?>" data-index="<?php echo $key ?>"><?php echo $slider['tab_title'] ?></li>
                <?php endforeach ?>
            </ul>
            <div class="swiper-container gallery-slider">
                <div class="swiper-wrapper">
                <?php foreach($sliders as $key => $slider) :?>
                    <div class="swiper-slide">

                        <video playsinline  autoplay muted loop poster="<?php echo $slider['tab_image'] ?>" >
                            <source src="<?php echo $slider['tab_image'] ?>" type="video/webm">
                            Your browser does not support the video tag.
                        </video>
                        <!-- <img src="<?php echo $slider['tab_image'] ?>" > -->
                        <p class="description"><?php echo $slider['tab_description'] ?></p>
                    </div>
                <?php endforeach ?>
                </div>
            </div>
        </div>
    </section>


<?php
}

   
 
