<section class="customers">
    <div class="customers__wrapper base_wrapper">
        <h1 class="customers__title secondary_title"><?php the_field('customers__title') ?></h1>
        <span class="customers__title-line line_orange"></span>
        <p class="customers__description base_text"><?php the_field('customers__description') ?></p>
        <div class="customers__content-wrap">
                <?php
                    if(have_rows('customers__card')) {
                        while (have_rows('customers__card')) : the_row(); ?>
                            <div class="customers__card">
                                <div class="customers__card-icon-arrow">
                                    <img src="<?php the_sub_field('customers__card-icon'); ?>" class="customers__card-icon">
                                    <img src="<?php the_field('customers__card-arrow') ?>" alt="Arrow" class="customers__card-arrow">
                                </div>
                                <p class="customers__card-text"><?php the_sub_field('customers__card-text'); ?></p>
                            </div>
                        <?php endwhile; 
                    }
                ?>
        </div>
    </div>
</section>