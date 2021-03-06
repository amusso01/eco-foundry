<?php
/**
 * Requires ACF Version 5.8+
 *
 * @author      Andrea Musso
 *
 *
 */



 /*==================================================================================
   navigation, Preset ACF Gutenberg Block
 ==================================================================================*/

 /* Register ACF Block
 /––––––––––––––––––––––––*/
 if( function_exists('acf_register_block') ) {

 	$result = acf_register_block(array(
 		'name'				     => 'fd_navigation',
 		'title'				     => __('Navigation'),
 		'description'		   => __('Navigation block'),
 		'render_callback'	 => 'foundry_gutenblock_navigation',
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
 		'keywords'		     => ['fd', 'navigation', 'image']
 	));
 }

 /* Render Block
 /––––––––––––––––––––––––*/
 function foundry_gutenblock_navigation() {
    
    // Option vars
   
    // Get Vars
    $links = get_field('menu');
    $button = get_field('button');


    // Return HTML

    ?>

    <section class="block-navigation" id="blockNavigation" >

        <div class="block-navigation__container content-block" >
            <div class="block-navigation__nav">
                <ul>
                    <?php foreach($links as $link ): ?>
                        <?php $anchor = strtolower(trim($link['link_and_anchor']['anchor_link'])); ?>
                        <li><a href="#<?php echo $anchor  ?>"><?php echo $link['link_and_anchor']['link'] ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php if($button): ?>
            <div class="block-navigation__button">
            <?php if($button['url'] )  :?>
                <button class="btn btn__white">
                    <a href="<?php echo $button['url'] ?>" class="button-text"><?php echo $button['title'] ?></a>
                    <div class="circle">
                        <span class="icon arrow"></span>
                    </div>
                </button>
            <?php endif;?>
            </div>
            <?php endif; ?>
        </div>

        <div id="backNav" class="back-to-nav">
            <?php get_template_part( 'svg-template/svg', 'btn-arrow' ) ?>
        </div>

    </section>


<?php
}

   
 
