<?php 
/**
 * Template Name: Fit 3D
 */
    ?>
<?get_header(); ?>

<section class="container-fluid programs fit_3d_page">
    
    <div class="row">
        <img class="top_image img-responsive" src="<?php the_field('top_image'); ?>" alt="" />
    </div>
    <div class="row programs_top_area">
        <div class="col-sm-10 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-2 top_text_area fit_3d_top_text">
            <h1><?php the_field('first_header'); ?></h1>
            <p><?php the_field('first_body_content'); ?></p>
        </div>
        <div class="col-md-5 col-lg-5 top_right_image_container">
            <img class="top_right_image" src="<?php the_field('top_right_image'); ?>" alt="" />
        </div>
    </div>
    <section class="scheduleAppointment">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-md-offset-3 col-lg-6 col-sm-6 col-sm-offset-3 col-lg-offset-3 fit_3d_middle_black_text">
                    <p><?php the_field('middle_content'); ?></p>
                </div>
            </div>
    </section>
    <div class="row">
        <img class="fit3d_middle_image" src="<?php the_field('middle_image'); ?>" alt="" />
    </>

    <div class="row programs_bottom_area">
        <div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
            <p><?php the_field('bottom_section_full_text_area'); ?></p>
        </div>
    </div>
    <div class="row">
        <img class="fit3d_bottom_image img-responsive" src="<?php the_field('bottom_image'); ?>" alt="" />
    </div>

	</section>
<?php get_footer(); ?>


