document.addEventListener('DOMContentLoaded', ()=>{
    document.querySelector('.responsesSwiper')&&
    new Swiper('.responsesSwiper',{
        slidesPerView:'auto',
        spaceBetween: 16,
        loop: true,
        centeredSlides: false,    
           
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
        },
        breakpoints:{            
            1024:{
                 spaceBetween: 24
            }
        }
        
        
    })

})