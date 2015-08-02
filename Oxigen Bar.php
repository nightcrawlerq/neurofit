<?php 
/**
 * Template Name: Oxigen Bar
 */
    ?>
<?get_header(); ?>

<section class="container-fluid programs oxigen_bar_page">
    
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
    <section class="scheduleAppointment">
            <div class="row">
                <div class="col-xs-12 col-md-3 col-md-offset-5 col-lg-6 col-sm-3 col-sm-offset-5 col-lg-offset-3 top-schedule-button">
                    <a href="https://clients.mindbodyonline.com/classic/home?studioid=191348">Schedule an appointment today!!</a>
                </div>
            </div>
    </section>
    <div class="row">
        <img class="oxigen_bar_middle_image img-responsive" src="<?php the_field('middle_image'); ?>" alt="" />
</div>
    <div class="row programs_bottom_area">
        <div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
            <p><?php the_field('bottom_section_full_text_area'); ?></p>
        </div>
    </div>
	</section>
<?php get_footer(); ?>


