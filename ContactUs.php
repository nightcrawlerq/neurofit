<?php 
/**
 * Template Name: Contact Us
 */
    ?>
<?get_header(); ?>

<section class="container-fluid programs contact_us_page">
    <div class="top_container contact_us_bg_image">
        <div class="row">
            <div class="col-lg-12 title">
                <h1><?php the_field('contact_us_title'); ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-5 col-sm-offset-1">

                <div class="row">
                    <div class="col-lg-4 col-xs-4 col-sm-4">
                     <img class="top_image img-responsive" src="<?php the_field('ca_flag_image'); ?>" alt="" />
                 </div>
                 <div class="col-lg-5 col-sm-8">
                    <?php the_field('ca_flag_text'); ?>
                </div>
            </div>
            <div class="row">

                <div class="col-xs-12 col-md-3 col-md-offset-5 col-lg-6 col-sm-3 col-sm-offset-5 col-lg-offset-3 top-schedule-button">

                    <a href="https://www.google.com/maps/dir/Current+Location/2139 Broad St, Regina, SK S4P 1Y6">Google Map</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                 <?php the_field('ca_bullet_points'); ?>
             </div>
         </div>
     </div>
     <div class="col-lg-5 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-5 col-sm-offset-1">

        <div class="row">
            <div class="col-lg-4 col-xs-4 col-sm-4">
             <img class="top_image img-responsive" src="<?php the_field('us_flag_image'); ?>" alt="" />
         </div>
         <div class="col-lg-5 col-sm-8">
            <?php the_field('us_flag_text'); ?>
        </div>
    </div>
    <div class="row">

        <div class="col-xs-12 col-md-3 col-md-offset-5 col-lg-6 col-sm-3 col-sm-offset-5 col-lg-offset-3 top-schedule-button">

            <a href="https://www.google.com/maps/dir/Current+Location/29260 Franklin RD Suite 126 Southfield, MI, 48034">Google Map</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
         <?php the_field('us_bullet_points'); ?>
     </div>
 </div>
</div>
</div>
</div>
    <div class="container-fluid">
        <div class="row store_hours_container">
            <div class="col-lg-8 col-lg-offset-2">
                <?php the_field('store_hours'); ?>
            </div>
        </div>
    </div>
    <div class="container-fluid contact_us_form">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
        <?php the_field('form'); ?>
            </div>
    </div>
        </div>
</section>
<?php get_footer(); ?>


