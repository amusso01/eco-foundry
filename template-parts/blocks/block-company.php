<?php
/**
 * Requires ACF Version 5.8+
 *
 * @author      Andrea Musso
 *
 *
 */



 /*==================================================================================
   company, Preset ACF Gutenberg Block
 ==================================================================================*/

 /* Register ACF Block
 /––––––––––––––––––––––––*/
 if( function_exists('acf_register_block') ) {

 	$result = acf_register_block(array(
 		'name'				     => 'fd_company',
 		'title'				     => __('Company'),
 		'description'		   => __('Company block'),
 		'render_callback'	 => 'foundry_gutenblock_company',
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
 		'keywords'		     => ['fd', 'company', 'product']
 	));
 }

 /* Render Block
 /––––––––––––––––––––––––*/
 function foundry_gutenblock_company() {
    
    // Option vars
    $bgColor = get_field('background_color');
    $anchorLink = get_field('anchor_point');
    $anchorLink = strtolower(trim( $anchorLink));

   
    // Get Vars
    $values = get_field('values');
    $logo = get_field('logo');
    $textBig = get_field('text_big');
    $textSmall = get_field('text_small');
  


    // Return HTML

    ?>
    <div id="<?php echo $anchorLink ?>"></div>
    <section  class="block-company content-block" style="background-color:<?php echo $bgColor ?>" >
      <div class="block-company__container">
     
        <div class="company-logo">
          <img src="<?php echo $logo ?>" alt="company logo">
        </div>
        
        <div class="company-grid-container">

          <div class="company-grid__left">
            <div class="text-big">
              <p><?php echo $textBig ?></p>
            </div>
            <div class="text-small">
              <p><?php echo $textSmall ?></p>
            </div>
          </div>

          <div class="company-grid__right">
            <?php foreach($values as $value) :?>
              <div class="value">
                <h3><?php echo $value['title'] ?></h3>
                <p><?php  echo $value['body'] ?></p>
              </div>
            <?php endforeach; ?>
          </div>

        </div>
      </div>
    </section>


<?php
}

   
 
