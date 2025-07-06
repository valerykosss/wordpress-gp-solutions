<section class="leadership">
    <div class="leadership__wrapper base_wrapper">
        <h2 class="leadership__title base_title">Leadership</h2>
        <span class="leadership__title-line line_blue"></span>
        
        <div class="leadership__cards-wrapper small_wrapper">

            <?php
                if(have_rows('leadership__card')) {
                    while (have_rows('leadership__card')) : the_row(); ?>
                        <div class="leadership__card card">
                            <div class="card__photo-wrapper">
                                <div class="card__circle-bg"></div>
                                <img class="card__photo" src="<?php the_sub_field('card__photo'); ?>">
                                <div class="card__circle-border"></div>
                            </div>

                            <div class="card__socials">
                                <img class="card__linkedin" src="<?php the_field('card__linkedin'); ?>">
                                <img class="card__arrow" src="<?php the_field('card__arrow'); ?>">
                            </div>

                            <div class="card__info">
                                <h4><?php the_sub_field('card__info-h4'); ?></h4>
                                <p><?php the_sub_field('card__info-p'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; 
                }
                ?>
        </div>
    </div>
</section>