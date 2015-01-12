<?php
/*
Template Name: threecolumns
*/
?>

<?php get_header(); ?>
<div class="threecolums-bg">
	<div class="threecolumns-wrapper u-gridContainer">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<div class="content-tekst">

				<h2><?php the_title(); ?></h2>

				<?php the_content(); ?>
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			</div>

			<article class="u-gridRow thumbs" id="post-<?php the_ID(); ?>">
					<article class="column u-gridCol3">
						<div class="column-text">
							<a class="thumb-link" href="/binnenschilderwerk">Binnenschilderwerk</a>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/titel-banner.png" class="title-banner"/>							
						</div>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/binnenschilderwerk.png" class="threecolums-thumb"/>
					</article>
					<article class="column u-gridCol3">
						<div class="column-text">
							<a class="thumb-link" href="/buitenschilderwerk">Buitenschilderwerk</a>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/titel-banner.png" class="title-banner"/>							
						</div>						
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/buitenschilderwerk.png" class="threecolums-thumb"/>
					</article>
					<article class="column u-gridCol3">
						<div class="column-text">
							<a class="thumb-link" href="/wandafwerking">Wandafwerking</a>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/titel-banner.png" class="title-banner"/>							
						</div>						
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/wandafwerking.png" class="threecolums-thumb"/>
					</article>
					<article class="column u-gridCol3">
						<div class="column-text">
							<a class="thumb-link" href="/glaszetten">Glaszetten</a>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/titel-banner.png" class="title-banner"/>							
						</div>						
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/glaszetten.png" class="threecolums-thumb"/>
					</article>
			</article>
		<?php endwhile; endif; ?> 
	</div>
</div>
<?php get_footer(); ?>
