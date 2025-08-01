document.addEventListener('DOMContentLoaded', ()=>{
    const cartModalOpenBtn = document.querySelector('#btnToCatalog')
    const cartModalContainer =  document.querySelector('.cartModal__container')
    const cartModalBody = document.querySelector('.cartModal__body')
    const cartModalCloseBtn = document.querySelector('#closeCartBtn')

    cartModalOpenBtn?.addEventListener('click', ()=>{
        document.body.style.overflowY='hidden'
        cartModalContainer.classList.add('active')
        cartModalBody.classList.add('active')
    })
    cartModalContainer?.addEventListener('click', ()=>{
            document.body.style.overflowY='scroll'
        cartModalContainer.classList.remove('active');
        cartModalBody.classList.remove('active')
    })
    cartModalCloseBtn?.addEventListener('click', ()=>{  
         document.body.style.overflowY='scroll'
        cartModalContainer.classList.remove('active');
        cartModalBody.classList.remove('active')
    })
    cartModalBody?.addEventListener(
        'click', (e)=>{
            e.stopPropagation()
        }
    )
})