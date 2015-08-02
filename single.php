<?php get_header(); ?>
	<div class="inner-content">
		<div id="primary" class="content-area col-md-8">
			<div id="content" class="site-content" role="main">

					<?php if ( have_posts() ) : ?>

				<?php /* The loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
					<div class="fb-comments" data-href="http://clients.edgewebmedia.com/neurofit" data-numposts="5" data-colorscheme="light"></div>
				<?php endwhile; ?>
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>

			</div><!-- #content -->
		</div><!-- #primary -->
		
		<?php if($page_id <> "18" ) : ?>

			<div  id="sidebar-form" class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
		<?php endif; ?>
		
		
	</div>

<?php get_footer(); ?>
