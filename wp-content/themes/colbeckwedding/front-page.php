<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- <h1 class="site-heading"><span class="site-heading__line-one">Stephen</span>
			<span class="site-heading__line-two"><span class="site-heading__amp">&amp;</span>&nbsp;Roisin</span></h1>
			<h2>are getting married!</h2> -->

			<img class="site-heading" src="<?php echo get_template_directory_uri(); ?>/images/site-heading.png" alt="Stephen & Roisin are getting married!">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
