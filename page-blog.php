<?php 
/*
	Template Name: Blog
*/
?>
<?php get_header(); ?>
		<div id="primary" class="content-area col-md-8">
		<div id="content" class="site-content" role="main">
		
		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="post-title">
			<h1><?php get_the_title(); ?></h1>
		</div>
		
		<?php $wp_query = new WP_Query(); $wp_query->query('showposts=8' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

		<h3 class="title-info"><a href="<?php the_permalink(); ?>" title="Read more"><?php get_the_title(); ?></a></h3>
		<?php the_excerpt(); ?>

		<?php endwhile; ?>

		<?php if ($paged > 1) { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
			<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
		</nav>

		<?php } else { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
		</nav>

		<?php } ?>

		<?php wp_reset_postdata(); ?>

	</article>
	
	</div><!-- #content -->
		</div><!-- #primary -->
		
		<?php if($page_id <> "18" ) : ?>

			<div  id="sidebar-form" class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
		<?php endif; ?>

<?php get_footer(); ?>