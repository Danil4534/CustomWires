@props(['loop'])

<div class="card__container">
    <form method='POST' action="{{ route('removeFromCart') }}">
        @csrf
        <input type="hidden" name="index" value="{{ $loop->index }}">
        <button type="submit"><i class="ph ph-trash card__trash"></i></button>
    </form>
    <div class="card__header">
        <div class="card__header__content">
            <x-picture-tag src="{{ asset('assets/'.$product['img'][0]) }}" class="productImg" />
            <div class="product__content">
                <h1 class="product__name">{{ $product['name'] }}</h1>
                <div class="product__discount">
                    <span>-{{ $product['discount'] }}%</span>
                    <p>250,00</p>
                </div>
                <div class="priceBlock">
                    <h2>000{{ $product['price'] }},00 <span>грн</span></h2>
                    <p>{{ $product['countInPackage'] }}шт</p>
                </div>
            </div>
        </div>

        <div class="actions__up">
            <div class="product__quantity">
                <button type="button" class="quantity-btn minus"><i class="ph ph-minus"></i></button>
                <input
                    type="number"
                    class="quantity-input"
                    value="{{ $product['countInPackage'] }}"
                    min="{{ $product['countInPackage'] }}"
                    readonly>
                <button type="button" class="quantity-btn plus"><i class="ph ph-plus"></i></button>
            </div>
            <div class="product__totalPrice">
                <h1>Всього:</h1>
                <p>190,00<span>грн</span></p>
            </div>
        </div>
    </div>
    <hr class="card__separator" />
    <div class="card__footer">

    </div>

</div>