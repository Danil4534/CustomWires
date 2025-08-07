document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('.productPreview__Slider') &&
        new Swiper('.productPreview__Slider', {
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
            },
            breakpoints: {
                1920: {
                    slidesPerView: 6,
                },
                1440: {
                    slidesPerView: 5,
                }
            }


        })

})