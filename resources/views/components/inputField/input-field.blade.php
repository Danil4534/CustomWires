@props(['label' => '', 'name' => '', 'placeholder' => '', 'type' => 'text', 'options' => []])

<div class="form__field">
    <label for="{{ $name }}">{{ $label }}</label>
    <div class="input__wrapper">
        @if($type === 'select')
        <select name="{{ $name }}" id="{{ $name }}">
            <option value="">{{ $placeholder }}</option>
            @foreach($options as $value => $text)
            <option value="{{ $value }}">{{ $text }}</option>
            @endforeach
        </select>
        <i class="ph-fill ph-caret-down"></i>
        @else
        <input type="{{ $type }}" name="{{ $name }}" placeholder="{{ $placeholder }}" id="{{ $name }}">
        <i class="ph ph-x clearIconField"></i>
        @endif
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const clearIconFields = document.querySelectorAll('.clearIconField');

        clearIconFields.forEach(icon => {
            icon.addEventListener('click', () => {
                const field = icon.previousElementSibling;
                if (field) {
                    if (field.tagName === 'INPUT') {
                        field.value = '';
                        field.focus();
                    } else if (field.tagName === 'SELECT') {
                        field.selectedIndex = 0;
                        field.focus();
                    }
                }
            });
        });
    });
</script>