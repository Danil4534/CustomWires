document.addEventListener('DOMContentLoaded', ()=>{
    document.querySelector('.popularProductSlider')&&
    new Swiper('.popularProductSlider',{
        slidesPerView: 'auto',
        spaceBetween: 0,
        // slidesGroup:1,
        loop: true,
        centeredSlides: false,    
           
        keyboard: {
            enabled: true
        },
       
        navigation:{
            nextEl:"#popularProductSlider__next",
            prevEl:"#popularProductSlider__prev"  
        },
        pagination:{
            el: '.popularProductSlider_pagination',
            type:'bullets',
            clickable:true
        },
        breakpoints:{
            1920:{
                slidesPerView: 6
            },
            1440:{
                 slidesPerView: 5
            }
        }
        
        
    })

})