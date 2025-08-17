@php
$count=1
@endphp

<div class="catalog__container">
    <div class="catalog__breadcrumbs">
        <p><a href="{{ route('page.Home') }}">Головна</a>/<a href="{{ route('page.catalog') }}">Каталог</a></p>
    </div>
    <div class="catalog__actions">
        <button class="catalog__FilterBtn"><i class="ph ph-funnel"></i> Фільтр</button>
        <button class="catalog__PopularBtn">Популярні <i class="ph-fill ph-caret-down"></i></button>
    </div>
    <div class="catalog__wrapper">
        <div class="catalog__filter">
            <div class="catalog__filter-content">
                @include('components.filter.filterContent' ,['products'=>$products])
            </div>
            <x-primary-button primaryBtnText="Показати ({{ $count }})" primaryClass="showProducts" />
        </div>
        <div class="catalog__list__wrapper">
            <div class="catalog__list__header">
                <h1 class="catalog__CountOfProducts"> Товарів знайдено: <span>{{ count($products) }}</span> </h1>
                <h1 class="catalog__sort">Сортувати:
                    <select>
                        <option value="" default>За популярністю</option>
                        <option value="" default>Від дешевих до дорогих</option>
                        <option value="" default>Від дорогих до дешевих</option>
                    </select>
                </h1>
            </div>
            <div class="catalog__listOfProducts__wrapper">
                @foreach ($products as $product )
                <x-product-card :product="$product" />
                @endforeach
            </div>
            <div class="catalog__getMore">
                <x-primary-button primaryBtnText="Показати більше" primaryBtnIconLeftSide="ph ph-arrows-clockwise"></x-primary-button>
            </div>
        </div>
    </div>
</div>