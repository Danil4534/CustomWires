document.addEventListener('DOMContentLoaded', ()=>{
    document.querySelector('.popularProductSlider')&&
    new Swiper('.popularProductSlider',{
        slidesPerView: 5,
        spaceBetween: 0,
        slidesGroup:1,
        loop: true,
        centeredSlides: true,    
           
        keyboard: {
            enabled: true
        },
       
        navigation:{
            nextEl:"#bannerSlide__next",
            prevEl:"#bannerSlide__prev"  
        },
        pagination:{
            el: '.popularProductSlider_pagination',
            type:'bullets',
            clickable:true
        },
        breakpoints:{
            1920:{
                slidesPerView: 6,
            }
        }
        
        
    })

})