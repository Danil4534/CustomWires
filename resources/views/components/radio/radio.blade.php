@props(['label'=>"", 'name'=>'' , 'subtitle'=>'' , 'icon'=>'', 'id' => ''])

<div class="radio__container">
    <input type="radio" name="{{ $name }}" id="{{ $id }}" />
    <label for="{{ $id }}">
        <div class="label__content">
            @if(!empty($icon))
            <i class="ph {{ $icon }}"></i>
            @endif
            <p>{{ $label }}</p>
        </div>
        <span>{{ $subtitle }}</span>
    </label>
</div>