<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>

	<div>
	<?php get_header(); ?>
	<div class="threecolums-bg">
		<div class="threecolumns-wrapper u-gridContainer">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
			<div class="content-tekst">

					<div class="u-gridRow maps">					
						<div class="adress u-gridCol4">
							<div class="adress-info">
								<p>Ravoo Schilderswerken</p>
								<p>Nijenheim 10-29</p>
								<p>3704 AA Zeist</p>
								<p>Email: ravooschilderwerken@casema.nl</p>
								<p>Tel: 030 268 87 44 </p>
							</div>
	
						</div>					
						<div class="adress-map u-gridCol8">
							<div id="map_canvas"></div>
						</div>

					</div> <!-- /gridRow -->

					<div class="hr-style super-margin">
						<hr>
					</div>
					<div class="u-gridRow">						
						<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
						<?php the_content(); ?>
					
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>

				</div> <!-- content-text -->
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>
</div>

<?php get_footer(); ?>

