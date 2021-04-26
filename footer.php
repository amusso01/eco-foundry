<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @author Andrea Musso
 *
 * @package foundry
 */

?>

</div><!-- #content -->

	<footer class="site-footer">
		<div class="top-line"></div>
		<div class="site-footer__inner">

			<div class="footer-enquire content-block">
				<div class="text">
					<p>Would you like more information?</p>
					<p class="h2">Let’s work together</p>
				</div>
				<a href="<?php echo site_url('contact-us') ?>" class="button">Enquire today</a>
			</div>

			<div class="footer-upper">
				<div class="footer-upper__menu content-block">
					<?php get_template_part( 'components/navigation/footer-nav' ) ?>
				</div>
			</div>

			<div class="footer-lower">
				<div class="footer-lower__menu content-block">
					<?php get_template_part( 'components/navigation/footer-nav-lower' ) ?>
				</div>
				<div class="footer-lower__social-row content-block">
					<div class="privacy">
						<a href="<?php echo get_privacy_policy_url()  ?>">Privacy Policy</a>
						<p><?php echo copyright() ?></p>
					</div>
					<div class="social">
						<ul class="social-menu">
							<li class="social-item">
								<a rel="noopener noreferrer" to target="_blank" href="https://www.facebook.com/eco.foundry"><?php get_template_part( 'svg-template/svg', 'facebook' ) ?></a>
							</li>
							<li class="social-item">
								<a rel="noopener noreferrer" to target="_blank" href="https://twitter.com/EcoFoundry"><?php get_template_part( 'svg-template/svg', 'twitter' ) ?></a>
							</li>
							<li class="social-item">
								<a rel="noopener noreferrer" to target="_blank" href="https://www.instagram.com/eco_foundry/"><?php get_template_part( 'svg-template/svg', 'instagram' ) ?></a>
							</li>
						</ul>
					</div>
				</div>
			</div>


		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
