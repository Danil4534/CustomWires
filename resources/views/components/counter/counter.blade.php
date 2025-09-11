@props(['title','value' => 0, 'step' => 1, 'name' => 'count'])

<div class="counter__container">
    <p>{{ $title ?? '' }}</p>
    <div class="counter">
        <i class="ph ph-minus"></i>
        <input
            inputmode="numeric"
            type="text"
            name="{{ $name }}"
            class="quantity-input"
            value="{{ $value }}"
            min="0"
            data-step="{{ $step }}">
        <i class="ph ph-plus"></i>
    </div>
</div>