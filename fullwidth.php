<?php 
/**
 * Template Name: full width
 */
    ?>
<?get_header(); ?>
	<div class="inner-content full-width3">
		<div id="primary" class="content-area col-md-12">
			<div id="content" class="site-content" role="main">
					<?php if ( have_posts() ) : ?>

				<?php /* The loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>
                                <div class="col-xs-12 col-md-3 col-md-offset-5 col-lg-2 col-sm-3 col-sm-offset-5 col-lg-offset-5 top-schedule-button">

                    <a href="https://clients.mindbodyonline.com/classic/home?studioid=191348">SCHEDULE AN APPOINTMENT</a>
                                    </div>


			</div><!-- #content -->
		</div><!-- #primary -->
		
		
		
	</div>
<?php get_footer(); ?>


