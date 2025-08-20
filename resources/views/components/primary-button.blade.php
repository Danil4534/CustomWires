<button class="primaryBtn {{ $primaryClass }}" id="{{ $id ?? '' }}" type="{{ $type ??'' }}" @if(!empty($route))
    onclick="window.location.href='{{ route($route) }}'" @endif>
    @if(!empty($primaryBtnIconLeftSide))
    <i class="{{ $primaryBtnIconLeftSide }}"></i>
    @endif
    @if(!empty($primaryBtnText))
    <span class="btn-text">{{ $primaryBtnText }}</span>
    @endif
    @if(!empty($primaryBtnIconRightSide))
    <i class="{{ $primaryBtnIconRightSide }}"></i>
    @endif
    @if(!empty($counter))
    <div class="counterWrapper">
        <p>{{ $counter }}<span>+</span></p>
    </div>
    @endif
</button>