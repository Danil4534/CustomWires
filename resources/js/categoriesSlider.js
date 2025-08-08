document.addEventListener('DOMContentLoaded', ()=>{
    document.querySelector('.categoriesSlider')&&
    new Swiper('.categoriesSlider',{
        slidesPerView:'auto',
        slidesPerGroup: 1,
        spaceBetween: 0,
        loop: true,
        keyboard: {
            enabled: true
        },
     
        navigation:{
            nextEl:"#nextBtnCategories",
            prevEl:"#prevBtnCategories"  
        },
          breakpoints: {
                1920: {
                    enabled: false 
                }
            }
    })

})