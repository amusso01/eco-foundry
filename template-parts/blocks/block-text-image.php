<?php
/**
 * Requires ACF Version 5.8+
 *
 * @author      Andrea Musso
 *
 *
 */



 /*==================================================================================
   text-image, Preset ACF Gutenberg Block
 ==================================================================================*/

 /* Register ACF Block
 /––––––––––––––––––––––––*/
 if( function_exists('acf_register_block') ) {

 	$result = acf_register_block(array(
 		'name'				     => 'fd_text-image',
 		'title'				     => __('Text and image'),
 		'description'		   => __('Text and image block'),
 		'render_callback'	 => 'foundry_gutenblock_text_image',
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
 		'keywords'		     => ['fd', 'text-image', 'image']
 	));
 }

 /* Render Block
 /––––––––––––––––––––––––*/
 function foundry_gutenblock_text_image() {
    
    // Option vars
    $backgroundColor = get_field('background_color');
    $position = get_field('image_position');
   
    // Get Vars
    $image = get_field('image');
    $text = get_field('text');
    $anchorLink = get_field('anchor_point');


    // Return HTML

    ?>

    <section id="<?php echo $anchorLink ?>" class="block-text-image"  style="background-color:<?php echo $backgroundColor ?>">

        <div class="block-text-image__container content-block" >
            <div class="block-text-image__box" style="<?php echo $isTextCenter ? 'align-self:center;' : '' ?><?php echo $position == 'left' ? ' order:2' : '' ?>">
            <?php if($text['title']) : ?>
                <div class="big-text">
                    <h2 ><?php echo $text['title'] ?></h2>
                </div>
            <?php endif; ?>
                <div class="small-text">
                    <p><?php echo $text['body'] ?></p>
                </div>
            </div>
            <div class="block-text-image__box" style="<?php echo $position == 'left' ? ' order:1' : '' ?>">
                <img src="<?php echo $image['url']  ?>" alt="<?php echo $image['title'] ?>">
            </div>
        </div>

    </section>


<?php
}

   
 
