@props(['label' => '', 'name' => '', 'placeholder' => ''])

<div class="form__field">
    <label for="{{ $name }}">{{ $label }}</label>
    <div class="input__wrapper">
        <input type="text" name="{{ $name }}" placeholder="{{ $placeholder }}">
        <i class="ph ph-x clearIconField"></i>
    </div>
</div>