<?php
/**
 * Template Name: Inside Page
 *
 * @package _mh
 */

get_header(); ?>

<div class="container">
	<div class="row">

		<div id="primary" class="col-md-9 col-lg-9">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'templates/content', 'single' ); ?>

					<?php _mh_post_nav(); ?>

					<?php
				// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
