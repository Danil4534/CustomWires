document.addEventListener('DOMContentLoaded', ()=>{
    const filterModalOpenBtn = document.querySelector('.catalog__FilterBtn')
    console.log(filterModalOpenBtn)
    const filterModalContainer = document.querySelector('#filterModalContainer')
    const filterModalBody = document.querySelector('.filterModal__body')
    const filterModalCloseBtn =  document.querySelector('#closeModalFilter')

filterModalOpenBtn?.addEventListener('click',()=>{
    document.body.style.overflowY='hidden'
    filterModalContainer.classList.add('active')
    filterModalBody.classList.add('active')
})
filterModalContainer?.addEventListener('click', ()=>{
    document.body.style.overflowY='scroll'
    filterModalContainer.classList.remove('active')
    filterModalBody.classList.remove('active')
})
filterModalCloseBtn?. addEventListener('click', ()=>{
    document.body.style.overflowY='scroll'
    filterModalContainer.classList.remove('active')
    filterModalBody.classList.remove('active')
})
    filterModalBody?.addEventListener('click',(e)=>e.stopPropagation())
})

