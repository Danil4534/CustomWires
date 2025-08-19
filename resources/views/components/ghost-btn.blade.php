@props(['index'])

<button class="ghostBtn {{ $ghostClass }}" id="{{ $id }}" data-index=" {{ $index??'' }}">
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