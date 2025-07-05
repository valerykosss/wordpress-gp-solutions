<section class="globalization">
    <div class="globalization__wrapper base_wrapper">
        <div class="globalization__row">
            <div class="globalization__left-column">
                <h2 class="globalization__title base_title"><?php the_field('globalization__title') ?></h1>
                <span class="globalization__title-line line_blue"></span>
            </div>
            <div class="globalization__right-column">
                <div class="globalization__description base_text">
                    <?php the_field('globalization__description') ?>
                </div>
            </div>
        </div>
        <div class="globalization__row">
            <img class="globalization__image" src="<?php the_field('globalization__image') ?>" alt="Map">
            <?php 
                $images = get_field('globalization__content-wrap');
                $size = 'thumbnail';

                if( $images ): ?>
                    <div class="globalization__content-wrap">
                        <?php foreach( $images as $image ): ?>
                            <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                        <?php endforeach; ?>
                    </div>
                <?php else : ?>
                    No images found
            <?php endif; ?>
        </div>
    </div>
</section>