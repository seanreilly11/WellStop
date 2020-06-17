<?php
/*
Template Name: Contact page
*/
get_header(); ?>
<div class="row container mx-auto px-0 pb-3">
    <div class="col-12 col-md-9">
        <h1 class="page-title"><?php the_title() ?></h1>
        <h1 class="jumbotron">In an emergency, always call 111</h1>
        <h3>Get in touch with us. We can help.</h3>
        <div class="row">
            <div class="contact-item-outer col-12 col-md-6 col-lg-4 p-3">
                <div class="d-flex justify-content-between align-items-center flex-column">
                    <h2 class="p-3 text-dark"><i class="fas fa-phone"></i></h2>
                    <h4 class="pb-2 text-center">WellStop</h4>
                    <div class="">04 566 4745</div>
                </div>
            </div>
            <div class="contact-item-outer col-12 col-md-6 col-lg-4 p-3">
                <div class="d-flex justify-content-between align-items-center flex-column">
                    <h2 class="p-3 text-dark"><i class="fas fa-phone"></i></h2>
                    <h4 class="pb-2 text-center">Wellington Help - 24/7 Crisis Support Line</h4>
                    <div class="">04 801 6655 & push '0' at menu</div>
                </div>
            </div>
            <div class="contact-item-outer col-12 col-md-6 col-lg-4 p-3">
                <div class="d-flex justify-content-between align-items-center flex-column">
                    <h2 class="p-3 text-dark"><i class="fas fa-phone"></i></h2>
                    <h4 class="pb-2 text-center">Wairarapa Rape and Sexual Abuse Collective</h4>
                    <div class="">0800 614 614.</div>
                </div>
            </div>
            <div class="contact-item-outer col-12 col-md-6 col-lg-4 p-3">
                <div class="d-flex justify-content-between align-items-center flex-column">
                    <h2 class="p-3 text-dark"><i class="fas fa-phone"></i></h2>
                    <h4 class="pb-2 text-center">Abuse and Rape Crisis Support Manawatu</h4>
                    <div class="">06 356 5868</div>
                </div>
            </div>
            <div class="contact-item-outer col-12 col-md-6 col-lg-4 p-3">
                <div class="d-flex justify-content-between align-items-center flex-column">
                    <h2 class="p-3 text-dark"><i class="fas fa-phone"></i></h2>
                    <h4 class="pb-2 text-center">Whanganui Safe and Free</h4>
                    <div class="">06 343 3416</div>
                </div>
            </div>
            <div class="contact-item-outer col-12 col-md-6 col-lg-4 p-3">
                <div class="d-flex justify-content-between align-items-center flex-column">
                    <h2 class="p-3 text-dark"><i class="fas fa-phone"></i></h2>
                    <h4 class="pb-2 text-center">Safe to talk Helpline</h4>
                    <div class="">0800 044 334</div>
                </div>
            </div>
            <div class="contact-item-outer col-12 col-md-6 col-lg-4 p-3">
                <div class="d-flex justify-content-between align-items-center flex-column">
                    <h2 class="p-3 text-dark"><i class="fas fa-phone"></i></h2>
                    <h4 class="pb-2 text-center">Outline NZ</h4>
                    <div class="">0800 OUTLINE </div>
                </div>
            </div>
        </div>
        <?php get_template_part('includes/section', 'blog') ?>
    </div>
    <div class="col-12 col-md-3 widget">
        <?php if (is_active_sidebar('page-sidebar')) :
            dynamic_sidebar('page-sidebar');
        endif; ?>
    </div>
</div>
<?php get_footer(); ?>