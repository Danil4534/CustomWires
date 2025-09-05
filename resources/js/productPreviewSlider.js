let slider = new Swiper('.productPreview__slider', {
    slidesPerView: 'auto',
    spaceBetween: 0,
    loop: true,
    centeredSlides: false,

    keyboard: {
        enabled: true
    },

    navigation: {
        nextEl: "#productPreview__next",
        prevEl: "#productPreview__prev"
    },

    pagination: {
        el: '.productPreview__pagination',
        type: 'bullets',
        clickable: true
    }
});

let slider2 = new Swiper('.productPreview__vertical__slider', {
    slidesPerView: 'auto',
    direction: 'vertical',
    clickable: true,
    watchSlidesProgress: true,
    freeMode: true,
    thumbs: {
        swiper: slider
    }
});

function updatePagination() {
    if (window.innerWidth >= 1440) {
        slider.params.pagination.type = 'fraction';
    } else {
        slider.params.pagination.type = 'bullets';
    }

    slider.pagination.destroy();
    slider.pagination.init();
    slider.pagination.render();
    slider.pagination.update();
}

updatePagination();
window.addEventListener('resize', updatePagination);
