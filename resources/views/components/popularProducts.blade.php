@php
$popularProducts = array_filter($products, function($product){
return $product['popular']===true;
});
@endphp

<div class="popularProducts_container">
    <div class="popularProducts_header">
        <h1> {{ Route::currentRouteName() !="page.Home" ?"схожі дроти":"популярні" }}</h1>
        <div class="popularProductSlider__nav">
            <div class="popularProductSlider__prev" id="popularProductSlider__prev"><x-secondary-button secondaryBtnIconLeftSide="ph-fill ph-caret-left" /></div>
            <div class="popularProductSlider__next" id="popularProductSlider__next"><x-secondary-button secondaryBtnIconLeftSide="ph-fill ph-caret-right" /></div>
        </div>
    </div>
    <div class="popularProducts_wrapper">
        @foreach ($popularProducts as $product )
        <x-product-card :product="$product" />
        @endforeach
    </div>
    <div class="swiper popularProductSlider">
        <div class="swiper-wrapper">
            @foreach ($popularProducts as $product )
            <div class="swiper-slide">
                <x-product-card :product="$product" />
            </div>
            @endforeach
        </div>
        <div class="popularProductSlider_pagination"></div>
    </div>

    <x-secondary-button secondaryBtnText="Показати ще" secondaryClass="showMore" />
</div>