<?php 
    get_header();
    while(have_posts()): the_post(); 
        get_template_part('floors/about/about');
        get_template_part('floors/globalization/globalization');
        get_template_part('floors/customers/customers');
        get_template_part('floors/leadership/leadership');
        get_template_part('floors/services/services');
        get_template_part('floors/testimonials/testimonials');
    endwhile;

    get_footer(); 
?>
