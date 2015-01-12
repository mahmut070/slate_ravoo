<?php
/*
Template Name: App page
*/
?>

<?php get_header(); ?>
<div class="threecolums-bg">
	<div class="threecolumns-wrapper u-gridContainer">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<div class="content-tekst u-gridRow">

					<h2><?php the_title(); ?></h2>
					<aside class="u-gridCol4">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/app-ravoo.png" class="App-iphone" />
					</aside>
					<article class="Content-article u-gridCol8" id="post-<?php the_ID(); ?>">
						<?php // the_content(); ?>
						
						<p>Bekijk nu ook de informatie van ons bedrijf vanuit de app! De app is beschikbaar in Google Play voor Android apparaten en als webapp voor iOS van Apple telefoons.

						Voor Apple iPhone gebruikers: scan de QR-code of surf naar de website. </p>

						<a href="https://play.google.com/store/apps/details?id=com.wRavooschilderwerk" class="google-play"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/play.png"/></a>



						<img class="qr_code" src="<?php echo get_stylesheet_directory_uri(); ?>/img/qr_code.png" />

						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</article>
			</div>
		</div>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>
