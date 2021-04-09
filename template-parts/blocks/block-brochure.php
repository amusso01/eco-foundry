<?php
/**
 * Requires ACF Version 5.8+
 *
 * @author      Andrea Musso
 *
 *
 */



 /*==================================================================================
   brochure, Preset ACF Gutenberg Block
 ==================================================================================*/

 /* Register ACF Block
 /––––––––––––––––––––––––*/
 if( function_exists('acf_register_block') ) {

 	$result = acf_register_block(array(
 		'name'				     => 'fd_brochure',
 		'title'				     => __('Brochures'),
 		'description'		   => __('Brochures block'),
 		'render_callback'	 => 'foundry_gutenblock_brochure',
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
 		'keywords'		     => ['fd', 'brochure', 'product']
 	));
 }

 /* Render Block
 /––––––––––––––––––––––––*/
 function foundry_gutenblock_brochure() {
    
    // Option vars
    $bgColor = get_field('background_color');
    $anchorLink = get_field('anchor_point');
    $anchorLink = strtolower(trim( $anchorLink));

   
    // Get Vars
    $brochure = get_field('brochures');


    // Return HTML

    ?>
    <div id="<?php echo $anchorLink ?>"></div>
    <section  class="block-brochure content-block" style="background-color:<?php echo $bgColor ?>" >
      <div class="block-brochure__container">
        <?php foreach($brochure as $single) : ?>
          <article class="brochure">
            <h3><?php echo $single['title']?></h3>
            <p><?php echo $single['body_text'] ?></p>
            <button class="btn btn__white">
                    <a href="<?php echo $single['link']['url'] ?>" class="button-text"><?php echo $single['link']['title'] ?></a>
                    <div class="circle">
                        <span class="icon arrow"></span>
                    </div>
                </button>
          </article>
        <?php endforeach; ?>
      </div>
    </section>


<?php
}

   
 
