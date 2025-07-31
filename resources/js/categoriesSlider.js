document.addEventListener('DOMContentLoaded', ()=>{
    document.querySelector('.categoriesSlider')&&
    new Swiper('.categoriesSlider',{
        slidesPerView:'auto',
        slidesPerGroup: 1,
        spaceBetween: 0,
        loop: true,
        centeredSlides: true,
        keyboard: {
            enabled: true
        },
     
        navigation:{
            nextEl:"#nextBtn",
            prevEl:"#prevBtn"  
        }
        
    })

})