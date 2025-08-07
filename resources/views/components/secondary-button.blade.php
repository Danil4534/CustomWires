<button class="secondaryBtn {{ $secondaryClass }}" type="{{ $type }}">
    @if(!empty($secondaryBtnIconLeftSide))
    <i class="{{ $secondaryBtnIconLeftSide }}"></i>
    @endif
    <span>{{ $secondaryBtnText}}</span>
    @if(!empty($secondaryBtnIconRightSide))
    <i class="{{ $secondaryBtnIconRightSide }}"></i>
    @endif
</button>