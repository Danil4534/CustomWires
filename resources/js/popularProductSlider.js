document.addEventListener('DOMContentLoaded', () => {
    const sliderEl = document.querySelector('.popularProductSlider');
    if (sliderEl) {
        const totalSlides = sliderEl.querySelectorAll('.swiper-slide').length;
new Swiper(sliderEl, {
    spaceBetween: 0,
    slidesPerGroup: 1,
    loop: true,                       
    loopedSlides: totalSlides,      
    centeredSlides: false,

    keyboard: { enabled: true },

    navigation: {
        nextEl: "#popularProductSlider__next",
        prevEl: "#popularProductSlider__prev"
    },
    pagination: {
        el: '.popularProductSlider_pagination',
        type: 'bullets',
        clickable: true
    },

    breakpoints: {
        1920: {
            slidesPerView: 6,
            slidesPerGroup: 6
        },
        1440: {
            slidesPerView: 5,
            slidesPerGroup: 5
        },
        1024: {
            slidesPerView: 3,
            slidesPerGroup: 3
        },
        768: {
            slidesPerView: 2,
            slidesPerGroup: 2
        },
        320: {
            slidesPerView: 1,
            slidesPerGroup: 1
        }
    }
});
    }
});
