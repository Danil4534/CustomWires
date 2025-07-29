<button class="ghostBtn {{ $ghostClass }}">
    @if(!empty($ghostBtnIconLeftSide))
    <i class="{{ $ghostBtnIconLeftSide }}"></i>
    @endif
    <span class="btn-text">{{ $ghostBtnText }}</span>
    @if(!empty($ghostBtnIconRightSide))
    <i class="{{ $ghostBtnIconRightSide }}"></i>
    @endif
    @if(!empty($counter))
    <div class="counterWrapper">
        <p>{{ $counter }}<span>+</span></p>
    </div>
    @endif
</button>