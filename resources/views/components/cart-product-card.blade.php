@props(['loop'])

<div class="card__container">
    <form method='POST' action="{{ route('removeFromCart') }}">
        @csrf
        <input type="hidden" name="index" value="{{ $loop->index }}">
        <button type="submit"><i class="ph ph-trash card__trash"></i></button>
    </form>
    <div class="card__header">
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
    <hr class="card__separator" />
    <div class="card__footer">

    </div>

</div>