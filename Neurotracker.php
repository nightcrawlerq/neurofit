<?php 
/**
 * Template Name: Neurotracker
 */
    ?>
<?get_header(); ?>

<section class="container-fluid programs neurotracker_page">
    
    <div class="row">
        <img class="top_image img-responsive" src="<?php the_field('top_image'); ?>" alt="" />
    </div>
    <div class="row programs_top_area">
        <div class="col-sm-10 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-2 top_text_area">
            <p><?php the_field('top_body_content'); ?></p>
        </div>
        <div class="col-md-6 col-lg-6 top_right_image_container">
            <img class="top_right_image" src="<?php the_field('top_right_image'); ?>" alt="" />
        </div>
    </div>
    <div class="row">
        <img class="neurotracker_middle_image img-responsive" src="<?php the_field('middle_image'); ?>" alt="" />
    </>
</div>
    <div class="row programs_bottom_area">
        <div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
            <p><?php the_field('bottom_section_full_text_area'); ?></p>
        </div>
    </div>
	</section>
<?php get_footer(); ?>


