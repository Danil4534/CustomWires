<button class="primaryBtn {{ $primaryClass }}" id="{{ $id ?? '' }}" type="{{ $type ??'' }}" @if(!empty($route))
    onclick="window.location.href='{{ route($route) }}'" @endif>
    @if(!empty($primaryBtnIconLeftSide))
    <i class="{{ $primaryBtnIconLeftSide }}"></i>
    @endif
    <span class="btn-text">{{ $primaryBtnText }}</span>
    @if(!empty($primaryBtnIconRightSide))
    <i class="{{ $primaryBtnIconRightSide }}"></i>
    @endif
    @if(!empty($counter))
    <div class="counterWrapper">
        <p>{{ $counter }}<span>+</span></p>
    </div>
    @endif
</button>