<section class="services">
    <div class="services__wrapper base_wrapper">
        <div class="services__row">
            <div class="services__left-column">
                <h2 class="services__title base_title"><?php the_field('services__title') ?></h1>
                <span class="services__title-line line_blue"></span>
            </div>
            <div class="services__right-column">
                <div class="services__description base_text">
                    <?php the_field('services__description') ?>
                </div>
            </div>
        </div>
        <div class="services__row">
            <div class="services__label-wrapper">
                <h3 class="services__label-text">
                    <?php the_field('services__label-text') ?>
                </h3>
            </div>
            <div class="services__items">

                <?php
                    if(have_rows('item')) {
                        while (have_rows('item')) : the_row(); ?>

                            <div class="services__items item">
                                <img src="<?php the_sub_field('item__image'); ?>" alt="Card Image">
                                <div class="item__wrapper">
                                    <h3 class="item__heading"><?php the_sub_field('item__heading'); ?></h3>
                                    <p class="item__text"><?php the_sub_field('item__text'); ?></p>
                                    <a class="item__link" href="<?php the_sub_field('item__link-href[link]'); ?>"><?php the_sub_field('item__link-text'); ?></a>
                                </div>
                            </div>
                        <?php endwhile; 
                    }
                ?>

            </div>
        </div>
    </div>
</section>