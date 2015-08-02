<?php 
/**
 * Template Name: Float Therapy
 */
    ?>
<?get_header(); ?>

<section class="container-fluid programs float_therapy_page">
    
    <div class="row">
        <img class="top_image img-responsive" src="<?php the_field('top_image'); ?>" alt="" />
    </div>
    <div class="row programs_top_area">
        <div class="col-sm-10 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-2 top_text_area">
            <p><?php the_field('top_body_content'); ?></p>
        </div>
        <div class="col-md-6 col-lg-6">
            <img class="top_right_image" src="<?php the_field('top_right_image'); ?>" alt="" />
        </div>
    </div>
    <section class="scheduleAppointment">
            <div class="row">
                <div class="col-xs-12 col-md-3 col-md-offset-5 col-lg-6 col-sm-3 col-sm-offset-5 col-lg-offset-3 top-schedule-button">
                    <a href="https://clients.mindbodyonline.com/classic/home?studioid=191348">Get true rest today!!</a>
                </div>
            </div>
    </section>
    <div class="row middle_content_container">
        <div class="col-lg-6">
            <div class="row middle_content_left_top_text_container">
            <div class="col-lg-7 col-lg-offset-4">
                <p><?php the_field('middle_content_left_top_text'); ?></p>
            </div>
                </div>
            <div class="row middle_content_left_bottom_text_container">
            <div class="col-lg-7 col-lg-offset-4">
                <p><?php the_field('middle_content_left_bottom_text'); ?></p>
            </div>
                </div>
        </div>
        <div class="col-lg-6">
            <div class="row middle_content_right_text_container">
                <div class="col-lg-8 col-lg-offset-1">
<p><?php the_field('middle_content_right_text'); ?></p>
        </div>
            </div>
        </div>
    </div>
        <div class="row">
        <img class="float_therapy_middle_image img-responsive" src="<?php the_field('middle_image'); ?>" alt="" />
</div>


    <div class="row programs_bottom_area">
        <div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
            <div class="bottom_section_top_text_area">
            <p><?php the_field('bottom_section_top_text_area'); ?></p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <p><?php the_field('bottom_section_middle_left_text_area'); ?></p>
                </div>
                <div class="col-lg-6 bottom_section_middle_right_list">
                    <p><?php the_field('bottom_section_middle_right_text_area'); ?></p>
                </div>
            </div>
            <div class="row">
            <div class="col-lg-12">
                <p><?php the_field('bottom_section_bottom_text_area'); ?></p>
            </div>
            </div>
        </div>
    </div>
	</section>
<?php get_footer(); ?>


