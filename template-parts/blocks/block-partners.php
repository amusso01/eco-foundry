<?php
/**
 * Requires ACF Version 5.8+
 *
 * @author      Andrea Musso
 *
 *
 */



 /*==================================================================================
   partners, Preset ACF Gutenberg Block
 ==================================================================================*/

 /* Register ACF Block
 /––––––––––––––––––––––––*/
 if( function_exists('acf_register_block') ) {

 	$result = acf_register_block(array(
 		'name'				     => 'fd_partners',
 		'title'				     => __('Partners'),
 		'description'		   => __('Partners block'),
 		'render_callback'	 => 'foundry_gutenblock_partners',
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
 		'keywords'		     => ['fd', 'partners', 'image']
 	));
 }

 /* Render Block
 /––––––––––––––––––––––––*/
 function foundry_gutenblock_partners() {
    
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
    <section class="block-partners content-block" >
        <div class="block-partners__container ">
           
        </div>
    </section>


<?php
}

   
 
