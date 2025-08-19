@props(['title','leftAnswer', 'rightAnswer'])
<div class="checkbox__container">
    <p>{{ $title }}</p>
    <div class="checkbox">
        <p>{{ $leftAnswer }}</p>
        <label class="switch">
            <input type="checkbox">
            <span class="slider"></span>
        </label>
        <p>{{ $rightAnswer}}</p>
    </div>
</div>