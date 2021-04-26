<?php
/**
 * Requires ACF Version 5.8+
 *
 * @author      Andrea Musso
 *
 *
 */



 /*==================================================================================
   accordion, Preset ACF Gutenberg Block
 ==================================================================================*/

 /* Register ACF Block
 /––––––––––––––––––––––––*/
 if( function_exists('acf_register_block') ) {

 	$result = acf_register_block(array(
 		'name'				     => 'fd_accordion',
 		'title'				     => __('Accordion'),
 		'description'		   => __('Accordion block'),
 		'render_callback'	 => 'foundry_gutenblock_accordion',
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
 		'keywords'		     => ['fd', 'accordion', 'image']
 	));
 }

 /* Render Block
 /––––––––––––––––––––––––*/
 function foundry_gutenblock_accordion() {
    
    // Option vars
    $anchorLink = get_field('anchor_point');
    $anchorLink = strtolower(trim( $anchorLink));
    $bgColor = get_field('background_color');
   
    // Get Vars
    $accordion = get_field('accordion');
    $title = get_field('block_title');
    $button = get_field('button');

    // Return HTML

    ?>
    <div id="<?php echo $anchorLink ?>"></div>
    <section  class="block-accordion" style="background-color:<?php echo $bgColor ?>" >
      <div class="accordion-container content-block">

        <h2><?php echo $title ?></h2>

        <dl id="js-badger-accordion" class="js-badger-accordion badger-accordion">
    
          <?php foreach($accordion as $item) : ?>
            <dt class="badger-accordion__header">
              <button class=" badger-accordion__trigger js-badger-accordion-header">
                  <div class="badger-accordion__trigger-title">
                    <?php echo $item['accordion_title'] ?>
                  </div>
                  <div class="badger-accordion__trigger-icon">
                    <div class="close">
                    <?php get_template_part( 'svg-template/svg','plus' ) ?>
                    </div>
                    <div class="open">
                      <?php get_template_part( 'svg-template/svg','minus' ) ?>
                    </div>
                  </div>
              </button>
          </dt>
          <dd class="badger-accordion__panel-inner text-module badger-accordion__panel js-badger-accordion-panel">
              <div class="js-badger-accordion-panel-inner">
                  <?php echo $item['accordion_text'] ?>
              </div>
          </dd>
          <?php endforeach; ?>
    
        </dl>
        <?php if($button['url'] )  :?>
        <button class="btn">
					<a href="<?php echo $button['url'] ?>" class="button-text"><?php echo $button['title'] ?></a>
					<div class="circle">
						<span class="icon arrow"></span>
					</div>
				</button>
      <?php endif;?>
      </div>


    </section>


<?php
}

   
 
