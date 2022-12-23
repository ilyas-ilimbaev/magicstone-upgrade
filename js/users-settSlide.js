const infoServicesSwiper = new Swiper('.header-center', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    autoplay: {
        delay: 5000,
    },

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true,
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            scrollbar: {
                el: ".swiper-scrollbar",
                draggable: true,
            }
        }
    },
    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});