document.addEventListener('DOMContentLoaded', ()=>{
    const menuModalOpenBtn = document.querySelector('#menuBtn')
    const menuModalContainer  = document.querySelector('#menuModalContainer')
    const menuModalBody= document.querySelector('#menuModalBody')
    const closeModalMenu = document.querySelector('#closeModalMenu')

    menuModalOpenBtn?.addEventListener('click', ()=>{
        menuModalContainer.classList.add('active')
        menuModalBody.classList.add('active')
    })
    menuModalContainer.addEventListener('click',()=>{
        menuModalContainer.classList.remove('active')
        menuModalBody.classList.remove('active')
    })
     closeModalMenu.addEventListener('click',()=>{
        menuModalContainer.classList.remove('active')
        menuModalBody.classList.remove('active')
    })
    menuModalBody?.addEventListener('click', (e)=>{
        e.stopPropagation()
    })
})