@props(['title','value'])
<div class="counter__container">
    <p>{{ $title ?? ''}}</p>
    <div class="counter">
        <i class="ph ph-minus"></i>
        <input
            type="number"
            name="count"
            class="quantity-input"
            value="{{ $value ??''}}"
            min=""
            readonly>
        <i class="ph ph-plus"></i>
    </div>
</div>