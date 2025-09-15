@props(['label'=>"", 'name'=>'' , 'subtitle'=>'' , 'icon'=>'', 'id' => '' , 'img'=>'','checked'=>''])

<div class="radio__container">
    <input type="radio" name="{{ $name }}" id="{{ $id }}" @if ($checked)
        checked
        @endif />
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