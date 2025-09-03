
document.addEventListener('DOMContentLoaded', ()=>{
    const oneClickModalOpenBtn = document.querySelector('#oneClickBtn')
    const oneClickModalContainer= document.querySelector('.oneClickModal__container')
    const oneClickModalBody= document.querySelector('.oneClickModal__body')
    const oneClickModalCloseBtn= document.querySelector('#closeOneClickModalBtn')
 
  
    oneClickModalOpenBtn?.addEventListener('click', ()=>{
        document.body.style.overflowY='hidden'
        oneClickModalContainer.classList.add('active')
        oneClickModalBody.classList.add('active')
    })
    oneClickModalContainer?.addEventListener('click', ()=>{
        document.body.style.overflowY='scroll'
        oneClickModalContainer.classList.remove('active');
        oneClickModalBody.classList.remove('active')
    })
    oneClickModalCloseBtn?.addEventListener('click', ()=>{
        document.body.style.overflowY='scroll'
        oneClickModalContainer.classList.remove('active');
        oneClickModalBody.classList.remove('active')
    })
    oneClickModalBody?.addEventListener('click', (e)=>e.stopPropagation())
})

