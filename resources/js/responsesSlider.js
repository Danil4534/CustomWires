document.addEventListener('DOMContentLoaded', ()=>{
    document.querySelector('.responsesSwiper')&&
    new Swiper('.responsesSwiper',{
        slidesPerView:1,
        spaceBetween: 16,
        loop: true,
        centeredSlides: true,
        keyboard: {
            enabled: true
        },
        pagination:{
            el:'.swiper-pagination',
            type:'bullets',
            clickable:true
        },
        navigation:{
            nextEl:"#nextBtn",
            prevEl:"#prevBtn"  
        }
        
    })

})