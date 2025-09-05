@props(['title','leftAnswer', 'rightAnswer','disabled'])

<div class="checkbox__container {{ !empty($disabled) ? "disabled":"" }}">
    <p>{{ $title }}</p>
    <div class="checkbox">
        <p>{{ $leftAnswer }}</p>
        <label class="switch">
            <input type="checkbox" {{ !empty($disabled)? 'disabled' : '' }}>
            <span class="slider"></span>
        </label>
        <p>{{ $rightAnswer}}</p>
    </div>
</div>