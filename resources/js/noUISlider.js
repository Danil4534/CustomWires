document.querySelectorAll('#slider').forEach(slider => {
    const fromInput = slider.parentElement.querySelector('.fromInput');
    const toInput = slider.parentElement.querySelector('.toInput');

    noUiSlider.create(slider, {
        start: [5, 100], 
        connect: true,
        range: {
            'min': 0,
            'max': 100
        }
    });

    slider.noUiSlider.on('update', (values, handle) => {
        if (handle === 0) {
            fromInput.value = Math.round(values[0]);
        } else {
            toInput.value = Math.round(values[1]);
        }
    });

    fromInput.addEventListener('change', function() {
        slider.noUiSlider.set([this.value, null]);
    });

    toInput.addEventListener('change', function() {
        slider.noUiSlider.set([null, this.value]);
    });
});