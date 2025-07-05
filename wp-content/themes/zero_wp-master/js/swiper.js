const swiper = new Swiper('.testimonials-swiper', {
    slidesPerView: 'auto',
    spaceBetween: 0,
    centeredSlides: false,
    loop: true,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
    }
});