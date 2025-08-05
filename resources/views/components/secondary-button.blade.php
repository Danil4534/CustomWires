<button class="secondaryBtn {{ $secondaryClass }}" type="{{ $type }}">
    @if(!empty($secondaryBtnIconLeftSide))
    <i class="{{ $secondaryBtnIconLeftSide }}"></i>
    @endif
    {{ $secondaryBtnText}}
    @if(!empty($secondaryBtnIconRightSide))
    <i class="{{ $secondaryBtnIconRightSide }}"></i>
    @endif
</button>