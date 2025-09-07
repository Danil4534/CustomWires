document.querySelectorAll('#slider').forEach(slider => {
    const container = slider.closest('.range_container');
    const fromInput = container.querySelectorAll('.fromInput');
    const toInput = container.querySelectorAll('.toInput');

    noUiSlider.create(slider, {
        start: [5, 100],
        connect: true,
        range: {
            min: 0,
            max: 100
        }
    });

    slider.noUiSlider.on('update', (values, handle) => {
        if (handle === 0) {
            fromInput.forEach(item => item.value = Math.round(values[0]));
        } else {
            toInput.forEach(item => item.value = Math.round(values[1]));
        }
    });

    fromInput.forEach(item => item.addEventListener('change', function() {
        slider.noUiSlider.set([this.value, null]);
    }));

    toInput.forEach(item => item.addEventListener('change', function() {
        slider.noUiSlider.set([null, this.value]);
    }));
});