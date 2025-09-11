
document.addEventListener('DOMContentLoaded', ()=>{
    const oneClickModalOpenBtn = document.querySelector('#oneClickBtn')
    const oneClickModalContainer= document.querySelector('.oneClickModal__container')
    const oneClickModalBody= document.querySelector('.oneClickModal__body')
    const oneClickModalCloseBtn= document.querySelector('#closeOneClickModalBtn')
    const phoneInput = oneClickModalBody.querySelector('input[name="phoneNumber"]')
  
      phoneInput?.addEventListener("focus", () => {
            if (!phoneInput.value.startsWith("+380")) {
                phoneInput.value = "+380";
            }
        });

        phoneInput?.addEventListener("blur", () => {
            if (phoneInput.value.trim() === "+380") {
                phoneInput.value = "";
            }
        });

        phoneInput?.addEventListener("keydown", (e) => {
            const start = phoneInput.selectionStart;
            if (start <= 5 && (e.key === "Backspace" || e.key === "Delete")) {
                e.preventDefault();
            }
        });
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

