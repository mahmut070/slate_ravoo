<div class="full-bg-footer">
	<footer>	
		<div class="">
			<div class="footer-wrapper u-gridContainer">
				<div class="u-gridRow">
					<div class="u-gridCol4">
						<a href="/home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer-logo.png" class="footer-logo"/></a>
					</div>
					
					<div class="u-gridCol4 contact-gegevens">
						<p>
							NIJENHEIM 10-29 </br>
							3704 AA ZEIST </br>
							+31 (0)30 268 87 44 </br>
							 <a href="mailto:ravooschilderwerken@casema.nl">ravooschilderwerken@casema.nl</a>
						</p>
					</div>
					
					<div class="u-gridCol4">
						<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
						<div class="Footer-inner u-gridRow">
							<?php dynamic_sidebar( 'footer-widgets' ); ?>
						</div>
						<?php endif; ?>
					</div>
				</div>
						<!-- Copyright info -->
						<p class="footer-bloginfo">&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Website & SEO door 
						<a href="http://www.lokaalgevonden.nl" target="_blank"><span class="lg-blauw">Lokaal</span>Gevonden</a>
						</p>
			</div>
		</div>
	</footer>
</div>

  <!-- Load jquery from google CDN if possible, with fallback to cdnjs -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"><\/script>')</script>

  <!-- build:remove:expanded -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
  <!-- /build -->
  <!-- build:remove:compressed -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landingpage-select.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-collapse.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-dropdown.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/prepend-svg.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/sticky_menu.js"></script>
   <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/google-maps.js"></script>
   <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/lightbox.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/ga.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.start.js"></script>
  <script src="http://localhost:35729/livereload.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html-inspector/0.8.0/html-inspector.js"></script>
  <script>HTMLInspector.inspect();</script>
  <!-- /build -->

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
	</body>
</html>
