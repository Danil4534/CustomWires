<div class="card_container">
    <div class="card_header">
        <x-picture-tag :src="asset('assets/' . $product['img'][0])" alt="productImg" lazy={{ true }} class="productImg" />
        @if($product['popular'])
        <span class="labelPopular">Популярні</span>
        @endif
    </div>
    @if($product['inStock'])
    <div class="card_inStock">
        <p><span></span> В наявності</p>
        <p class="art">Арт: {{ $product['art'] }}</p>
    </div>
    @endif
    <hr>
    <div class="card_content">
        <h3>{{ $product['name'] }}</h3>
        <div class="card_content_wrapper">
            <div class="card_content_price">
                @if ($product['discount'] )
                <div class="discountBlock">
                    <div class="discount_container">
                        <span>-{{ $product['discount'] }}%</span>
                    </div>
                    <p>250,00</p>
                </div>
                <div class="priceBlock">
                    <h2>000{{ $product['price'] }},00 <span>грн</span></h2>
                    <p>{{ $product['countInPackage'] }}шт</p>
                </div>
                @endif
            </div>
            <form action="{{ route('addToCart') }}" method="POST">
                @csrf
                <input type="hidden" name="product" value="{{ base64_encode(json_encode($product)) }}">
                <x-primary-button type="submit" primaryBtnIconLeftSide="ph ph-basket" primaryClass="chooseProdBtn" />
            </form>
        </div>

    </div>
</div>