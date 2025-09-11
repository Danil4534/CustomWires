document.querySelectorAll('.counter').forEach(counter => {
    const input = counter.querySelector('.quantity-input');
    const incrementBtn = counter.querySelector('.ph-plus');
    const decrementBtn = counter.querySelector('.ph-minus');
    const step = Number(input.dataset.step) || 1;
    const min = Number(input.min) || step;
    const roundToHundred = (num) => Math.round(num / 100) * 100;
    input.addEventListener('focus', () => {
        if (input.value === "0") {
            input.value = "";
        }
    });
    input.addEventListener('blur', () => {
        let value = Number(input.value.trim() || min);
        if (value < min) value = min; 
        input.value = step === 100 ? roundToHundred(value) : value;
    });
    incrementBtn.addEventListener('click', () => {
        let value = Number(input.value || 0) + step;
        input.value = step === 100 ? roundToHundred(value) : value;
    });
    decrementBtn.addEventListener('click', () => {
        let value = Number(input.value || 0) - step;
        if (value < min) value = min;
        input.value = step === 100 ? roundToHundred(value) : value;
    });
});