@props(['name','value', 'id'])
<button id="{{ $id }}" class="secondaryBtn {{ $secondaryClass }}" type="{{ $type }}" @if(!empty($route))
    onclick="window.location.href='{{ route($route) }}'" @endif id="{{ $id }}" name="{{ $name ?? ''}}" value="{{ $value ?? ''}}">
    @if(!empty($secondaryBtnIconLeftSide))
    <i class="{{ $secondaryBtnIconLeftSide }}"></i>
    @endif
    <span>{{ $secondaryBtnText}}</span>
    @if(!empty($secondaryBtnIconRightSide))
    <i class="{{ $secondaryBtnIconRightSide }}"></i>
    @endif
</button>