@props(['title','value' => 0, 'step' => 1, 'name' => 'count'])

<div class="counter__container">
    <p>{{ $title ?? '' }}</p>
    <div class="counter">
        <i class="ph ph-minus"></i>
        <input
            type="number"
            name="{{ $name }}"
            class="quantity-input"
            value="{{ $value }}"
            min="0"
            readonly
            data-step="{{ $step }}">
        <i class="ph ph-plus"></i>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('.counter').forEach(counter => {
            const input = counter.querySelector('.quantity-input');
            const incrementBtn = counter.querySelector('.ph-plus');
            const decrementBtn = counter.querySelector('.ph-minus');
            const step = Number(input.dataset.step) || 1;

            incrementBtn.addEventListener('click', () => {
                input.value = Number(input.value || 0) + step;
            });

            decrementBtn.addEventListener('click', () => {
                const newValue = Number(input.value || 0) - step;
                input.value = newValue >= (Number(input.min) || 0) ? newValue : input.min;
            });
        });
    });
</script>