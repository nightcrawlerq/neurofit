<?php 
/**
 * Template Name: Home Page Template, No Sidebar
 */
get_header(); ?>

		<div class="home-buttons">
			<ul>
				<li>
					<a href="#" target="_blank"><img src="<?php bloginfo('template_url')?>/img/giftcard.png"></a>
				</li>
				<li>
					<a href="#" target="_blank"><img src="<?php bloginfo('template_url')?>/img/WinAFree.png"></a>
				</li>
				<li>
					<a href="#" target="_blank"><img src="<?php bloginfo('template_url')?>/img/MembersLogin.png"></a>
				</li>
			</ul>
		</div>

	<div class="col-md-12 top-home-con">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post();  
				$meta = get_post_meta( get_the_ID() ); ?>
				<div class="home-block-container clearfix">
					<div class="col-md-4 home-block" style="margin-bottom: 20px;"><?php echo (isset($meta['home_block_a']))?implode('',do_shortcode($meta['home_block_a'])):'home_block_a'; ?></div>
					<div class="col-md-4 home-block" style="margin-bottom: 20px;"><?php echo (isset($meta['home_block_b']))?implode('',do_shortcode($meta['home_block_b'])):'home_block_b'; ?></div>
					<div class="col-md-4 home-block" style="margin-bottom: 20px;"><?php echo (isset($meta['home_block_c']))?implode('',do_shortcode($meta['home_block_c'])):'home_block_c'; ?></div>
				</div>
				<div class="home-block-container clearfix">
					<div class="col-md-4 home-block" style="margin-bottom: 20px;"><?php echo (isset($meta['home_block_d']))?implode('',do_shortcode($meta['home_block_d'])):'home_block_d'; ?></div>
					<div class="col-md-4 home-block" style="margin-bottom: 20px;"><?php echo (isset($meta['home_block_e']))?implode('',do_shortcode($meta['home_block_e'])):'home_block_e'; ?></div>
					<div class="col-md-4 home-block" style="margin-bottom: 20px;"><?php echo (isset($meta['home_block_f']))?implode('',do_shortcode($meta['home_block_f'])):'home_block_f'; ?></div>
				</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div><!-- #content -->
	</div><!-- #primary -->
	</div>
<?php get_footer(); ?>
