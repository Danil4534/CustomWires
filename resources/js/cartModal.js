document.addEventListener('DOMContentLoaded', ()=>{
    const cartModalOpenBtn = document.querySelector('#cartBtn')
    const editBtn = document.querySelector('#editBtn')
    const cartModalContainer =  document.querySelector('.cartModal__container')
    const cartModalBody = document.querySelector('.cartModal__body')
    const cartModalCloseBtn = document.querySelector('#closeCartBtn')
    const continueBtn = document.querySelector('.continueBtn')
    editBtn?.addEventListener('click', ()=>{
        cartModalContainer.classList.add('active')
        cartModalBody.classList.add('active')
    })
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
      continueBtn?.addEventListener('click', ()=>{
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