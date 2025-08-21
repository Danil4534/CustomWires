@props(['label'=>"", 'name'=>'' , 'subtitle'=>'' , 'icon'=>'', 'id' => '' , 'img'=>''])

<div class="radio__container">
    <input type="radio" name="{{ $name }}" id="{{ $id }}" />
    <label for="{{ $id }}">
        <div class="label__content">
            @if(!empty($icon))
            <i class="{{ $icon }}"></i>
            @endif

            @if (!empty($img))
            <div class="icon">
                <x-picture-tag src="{{ asset($img) }}" />
            </div>
            @endif

            <p>{{ $label }}</p>
        </div>
        <span class="subtitle">{{ $subtitle }}</span>
    </label>
</div>