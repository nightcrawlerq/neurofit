<?php 
/**
 * Template Name: About Us
 */
    ?>
<?get_header(); ?>

<section class="container-fluid programs about_us_page">
    <div class="top_container">
        <div class="row">
            <div class="col-lg-12 title">
                <h1><?php the_field('about_us_title'); ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
                <img class="top_image img-responsive" src="<?php the_field('top_image'); ?>" alt="" />
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
                <p><?php the_field('top_body_upper_content'); ?></p>
            </div>
        </div>
        <div class="row about_us_middle_image_container">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
                <img class="img-responsive" src="<?php the_field('middle_image'); ?>" alt="" />
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
                <p><?php the_field('top_body_lower_content'); ?></p>
            </div>
        </div>
    </div>

    <div class="bottom_container">
        <div class="row bottom_section_one">

            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
                <h1><?php the_field('health_header'); ?></h1>
            </div>

            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
                <p><?php the_field('health_content'); ?></p>
            </div>
            <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-8 col-sm-offset-2">
                <p><?php the_field('health_bullet_points'); ?></p>
            </div>
            <div class="col-lg-5 col-md-5 hidden-sm hidden-xs">
                 <img src="<?php the_field('health_motto_image'); ?>" alt="" />
            </div>
        </div>

        <div class="row bottom_section_two">

            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
                <h1><?php the_field('performance_header'); ?></h1>
            </div>

            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
                <p><?php the_field('performance_content'); ?></p>
            </div>
            <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-8 col-sm-offset-2">
                <p><?php the_field('performance_bullet_points'); ?></p>
            </div>
            <div class="col-lg-5 col-md-5 hidden-sm hidden-xs">
 <img src="<?php the_field('performance_motto_image'); ?>" alt="" />
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>


