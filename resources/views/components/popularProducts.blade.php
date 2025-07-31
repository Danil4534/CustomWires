@php
$popularProducts = array_filter($products, function($product){
return $product['popular']===true;
});
@endphp

<div class="popularProducts_container">
    <h1>Популярні</h1>
    <div class="popularProducts_wrapper">
        @foreach ($popularProducts as $product )
        <x-product-card :product="$product" />
        @endforeach
    </div>
    <x-secondary-button secondaryBtnText="Показати ще" secondaryClass="showMore" />
</div>