<section class="about">
    <div class="about__wrapper base_wrapper">
        <h1 class="about__title base_title"><?php the_field('about__title') ?></h1>
        <span class="about__title-line line_blue"></span>
        <div class="about__content-wrap">
            <p class="about__content-description base_text"><?php the_field('about__content-description') ?></p>
            <a href="<?php the_field('about__content-video-link') ?>" target="_blank" class="about__content-video-link">
                <img src="<?php the_field('about__content-video-thumbnail') ?>" alt="Video thumbnail" class="about__content-video-thumbnail">
            </a>
        </div>
    </div>
</section>