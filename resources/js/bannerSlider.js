document.addEventListener('DOMContentLoaded', ()=>{
    document.querySelector('.bannerSlider')&&
    new Swiper('.bannerSlider',{
        slidesPerView: 'auto',
        spaceBetween: 16,
        loop: true,
        centeredSlides: true,    
           
        keyboard: {
            enabled: true
        },
       
        navigation:{
            nextEl:"#bannerSlide__next",
            prevEl:"#bannerSlide__prev"  
        },
     
        
        
    })

})