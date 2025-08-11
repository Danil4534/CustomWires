@php
$count = 1
@endphp

<div class="filterModal__container" id="filterModalContainer">
    <div class="filterModal__body">
        <h1>Фільтри <span>(0)</span></h1>
        <i class="ph ph-x" id="closeModalFilter"></i>
        <div class="filterContent_container">
            @include('components.filter.filterContent')
        </div>
        <div class="catalog__getMore">
            <x-primary-button primaryBtnText="Показати ({{ $count  }})"></x-primary-button>
        </div>
    </div>
</div>