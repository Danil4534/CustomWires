
  
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
            },

            breakpoints: {
                375:{
                    slidesPerView:'auto',
                      pagination: {
                        el: '.productPreview__pagination',
                        type: 'bullets',
                        clickable: true
                    }
                },


                1440: {
                    slidesPerView: 'auto',
                    pagination: {
                        el: '.productPreview__pagination',
                        type: 'fraction',
                        clickable: true
                    },
                   

                },
                1920: {
                    slidesPerView: 'auto',
                    centeredSlides: true,  pagination: {
                        el: '.productPreview__pagination',
                        type: 'fraction',
                        clickable: true
                    }
                }
            }
        });
       let slider2 = new Swiper('.productPreview__vertical__slider',{
            slidesPerView: 'auto',
            direction:'vertical',
            clickable:true,
            watchSlidesProgress: true,  freeMode: true,
            thumbs:{
                swiper:slider
            }
        })
    
