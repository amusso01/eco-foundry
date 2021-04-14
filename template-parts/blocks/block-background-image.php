<?php
/**
 * Requires ACF Version 5.8+
 *
 * @author      Andrea Musso
 *
 *
 */



 /*==================================================================================
   background-image, Preset ACF Gutenberg Block
 ==================================================================================*/

 /* Register ACF Block
 /––––––––––––––––––––––––*/
 if( function_exists('acf_register_block') ) {

 	$result = acf_register_block(array(
 		'name'				     => 'fd_background-image',
 		'title'				     => __('Background image'),
 		'description'		   => __('Full width background image and text overlay'),
 		'render_callback'	 => 'foundry_gutenblock_backgroundImage',
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
 		'keywords'		     => ['fd', 'background-image', 'image']
 	));
 }

 /* Render Block
 /––––––––––––––––––––––––*/
 function foundry_gutenblock_backgroundImage() {
    
    // Option vars
   
    // Get Vars
    $bgImage = get_field('background_image');
    $title = get_field('top_title');
    $logo = get_field('logo');
    $body = get_field('body_text');
    $greenText = get_field('green_text');
    $button = get_field('button');

    $anchor = get_field('anchor_point');

    $anchor = strtolower(trim($anchor));


    // Return HTML

    ?>
    <div id="<?php echo $anchor ?>"></div>
    <section class="block-background-image" style="background-image:url(<?php echo $bgImage ?>);" >

        <div class="overlay-text content-block">
        <?php if($title) : ?>
            <h2 class="<?php echo $logo ? '' : 'big' ?>" ><?php echo $title ?></h2>
        <?php endif; ?>
        <?php if($logo) : ?>
            <img src="<?php echo $logo ?>" alt="logo">
        <?php endif; ?>
        <?php if($body) : ?>
            <p class="body"><?php echo $body ?></p>
        <?php endif; ?>
        <?php if($greenText) : ?>
            <p class="green"><?php echo $greenText ?></p>
        <?php endif; ?>
        <?php if($button) : ?>
            <a href="<?php echo $button['url'] ?>" class="button"><?php echo $button['title'] ?></a>
        <?php endif; ?>
         
        </div>

    </section>


<?php
}

   
 
