<?php 
/**
 * Template Name: ARX
 */
    ?>
<?get_header(); ?>

<section class="container-fluid programs">
    
    <div class="row">
        <img class="top_image" src="<?php the_field('top_image'); ?>" alt="" />
    </div>
    <div class="row programs_top_area">
        <div class="col-lg-5 col-lg-offset-2 top_text_area">
            <h1><?php the_field('first_header'); ?></h1>
            <p><?php the_field('first_set_of_bulletpoints'); ?></p>
            <h2><?php the_field('first_minor_header'); ?></h2>
            <p><?php the_field('first_body_content'); ?></p>
        </div>
        <div class="col-lg-5 top_right_image">
            <img class="img-responsive" src="<?php the_field('top_right_image'); ?>" alt="" />
        </div>
    </div>
    <section class="scheduleAppointment">
            <div class="row">
                <div class="col-xs-12 col-md-3 col-md-offset-5 col-lg-6 col-sm-3 col-sm-offset-5 col-lg-offset-3 top-schedule-button">
                    <a href="https://clients.mindbodyonline.com/classic/home?studioid=191348">Schedule an appointment today!!</a>
                </div>
            </div>
    </section>
    <div class="row programs_middle_area">
        <div class="col-lg-3 col-lg-offset-2 middle_text_area">
            <h1><?php the_field('second_header'); ?></h1>
            <p><?php the_field('second_header_content'); ?></p>
            <p><span class="highlight_text"><?php the_field('second_section_highlight_text'); ?></span></p>
            <p><?php the_field('second_section_end_content'); ?></p>
        </div>
        <div class="col-sm-offset-4 col-sm-4 col-lg-5 col-lg-offset-2 middle_right_image">
            <img class="img-responsive" src="<?php the_field('second_section_right_image'); ?>" alt="" />
        </div>
    </div>
    <div class="row programs_bottom_area">
        <div class="col-lg-8 col-lg-offset-2">
            <p><?php the_field('third_section_full_text_area'); ?></p>
        </div>
    </div>
	</section>
<?php get_footer(); ?>


