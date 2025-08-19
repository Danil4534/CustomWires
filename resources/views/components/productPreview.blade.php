@php
$chooseProduct = $chooseProduct->first();
@endphp

<div class="productPreview__container">
    <div class="breadcrumbs">
        <h1><a href="{{ route('page.Home') }}">Головна</a>/<a href="{{ route('page.catalog') }}">Каталог</a>/<span>{{ $chooseProduct['name'] }}</span></h1>
    </div>
    <div class="productPreview__wrapper">
        <div class="swiper productPreview__slider">
            <div class="swiper-wrapper">
                @foreach ((array) $chooseProduct['img'] as $chooseProductImg )
                <div class="swiper-slide">
                    <x-picture-tag src="{{ asset('assets/'. $chooseProductImg)  }}" />
                </div>
                @endforeach
            </div>
            <div class="productPreview__prev" id="productPreview__prev"><x-secondary-button secondaryBtnIconRightSide="ph-fill ph-caret-left" /></div>
            <div class="productPreview__next" id="productPreview__next"><x-secondary-button secondaryBtnIconRightSide="ph-fill ph-caret-right" /></div>
            <div class="productPreview__pagination"></div>
        </div>
        <div class="productPreview__content">
            <div class="productContent_wrapper">
                <h1 class="product__title">{{ $chooseProduct['name'] }}</h1>
                @if($chooseProduct['inStock'])
                <div class="product_inStock">
                    <p><span></span> В наявності</p>
                    <p class="art">Арт: {{ $chooseProduct['art'] }}</p>
                </div>
                @endif
                <hr>
                <div class="product__characteristics">
                    <h3>Характеристики</h3>
                    <div class="characteristics__box">
                        <ul class="product-characteristics">
                            @foreach ($chooseProduct['characteristics'] as $label => $value)
                            <li><span class="label">{{ $label }}:</span><span class="dots"></span><span class="value">{{ $value }}</span></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
            <div class="productPrice__wrapper">
                <div class="productPrice__content">
                    @if ($chooseProduct['discount'] )
                    <div class="discountBlock">
                        <div class="discount_container">
                            <span>-{{ $chooseProduct['discount'] }}%</span>
                        </div>
                        <p>250,00</p>
                    </div>
                    <div class="priceBlock">
                        <h2>000{{ $chooseProduct['price'] }},00 <span>грн</span><span class="priceBlock_package"> / {{ $chooseProduct['countInPackage'] }}шт</span></h2>
                        <p>{{ $chooseProduct['countInPackage'] }}шт</p>
                    </div>
                    @endif
                    <div class="productPrice__actions">
                        <div class="actions__up">
                            <div class="product__quantity">
                                <i class="ph ph-minus"></i>
                                <input
                                    type="number"
                                    name="count"
                                    class="quantity-input"
                                    value="{{ $chooseProduct['countInPackage'] }}"
                                    min="{{ $chooseProduct['countInPackage'] }}"
                                    readonly>
                                <i class="ph ph-plus"></i>
                            </div>
                        </div>
                        <form action="{{ route('addToCart') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product" value="{{ base64_encode(json_encode($chooseProduct)) }}">
                            <x-primary-button primaryBtnIconLeftSide="ph ph-plus" primaryBtnText="Додати" />
                        </form>
                    </div>
                    <form action="{{ route('addProductForOneClickModal') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product" value="{{ base64_encode(json_encode($chooseProduct)) }}">
                        <x-secondary-button secondaryBtnIconLeftSide="ph ph-plus" secondaryBtnText="Замовити в один клік" secondaryClass="btnOneClick" id="oneClickBtn" name="action" value="oneClickOrder" />
                    </form>
                </div>
                <div class="product_methodsOfpayment">
                    @include('components.methods_of_payment')
                </div>
            </div>
            <hr>
            <div class="product__description">
                <h2>опис</h2>
                <p>{{ $chooseProduct['description'] }}</p>
            </div>
        </div>
    </div>
    <div class="product__description">
        <h2>опис</h2>
        <p>{{ $chooseProduct['description'] }}</p>
    </div>
</div>
</div>
</div>