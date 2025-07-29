<button class="primaryBtn {{ $primaryClass }}">
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