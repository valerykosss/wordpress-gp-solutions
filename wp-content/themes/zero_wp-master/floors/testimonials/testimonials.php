<section class="testimonials">
    <div class="testimonials__wrapper base_wrapper">
        <h2 class="testimonials__title base_title"><?php the_field('testimonials__title') ?></h2>
        <span class="testimonials__title-line line_blue"></span>
            
        <div class="swiper testimonials-swiper">
                <div class="swiper-wrapper">
                    <?php
                        if(have_rows('testimonials__item')) {
                            while (have_rows('testimonials__item')) : the_row(); ?>
                                <div class="swiper-slide">
                                    <div class="testimonials__item">
                                        <div class="testimonials__author">
                                            <img class="testimonials__avatar" src="<?php the_sub_field('testimonials__avatar'); ?>"/>
                                            <div class="testimonials__author-info">
                                                <h3 class="testimonials__author-name"><?php the_sub_field('testimonials__author-name'); ?></h3>
                                                <p class="testimonials__author-position"><?php the_sub_field('testimonials__author-position'); ?></p>
                                            </div>
                                            <img class="testimonials__company-logo" src="<?php the_sub_field('testimonials__company-logo'); ?>"/>
                                        </div>
                                        <div class="testimonials__text">
                                            <?php the_sub_field('testimonials__text'); ?>
                                        </div>
                                       </div>
                                </div>
                            <?php endwhile; 
                        }
                    ?>
                </div>
                
                <div class="swiper-pagination"></div>
            </div>
    </div>
</section>