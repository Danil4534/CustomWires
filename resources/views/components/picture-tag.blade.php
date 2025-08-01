@props(['class'])
<picture class="{{$class}}">
    <source srcset="{{ $webpSrc() }}">
    <img src="{{ $src }}" alt="{{ $alt }}" class="{{ $class ?? ""}}" @if($lazy) loading="lazy" @endif>
</picture>