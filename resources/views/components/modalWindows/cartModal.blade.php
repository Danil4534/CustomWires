@php
$chooseProducts = session()->get('chooseProducts');
@endphp
<div class="cartModal__container">
    <div class="cartModal__body">
        <i class="ph ph-x" id="closeCartBtn"></i>

        @if(empty($chooseProducts))
        <div class="cartModal__empty">
            <h1 class="cartModal__empty__title">Кошик порожній :(</h1>
            <p class="cartModal__empty__subtitle">Нічого страшного - завжди можна щось додати 😉</p>
            <x-primary-button primaryBtnText="До каталогу" id="btnToCatalog" primaryClass="btnToCatalog" route="page.catalog" />
        </div>
        @else
        <div class="cartModal__full">
            <h1 class="cartModal__full__title">Кошик</h1>
            <p class="cartModal__full__subtitle">Ви обрали {{ count($chooseProducts) }} товар(-а)</p>
            <div class="cartModal__content">
                <hr class="cartModal__separator" />
                <div class="cartModal__products">
                    @foreach ($chooseProducts as $product )
                    <x-cart-product-card :product="$product" :loop="$loop" />
                    @endforeach
                </div>
                <div class="cartModal__result">
                    <h1> Загальна сума замовлення
                    </h1>
                    <hr class="cartModal__result__separator">
                    <div class="result">
                        <div class="result__orderPrice">
                            <p>Вартість замовлення</p>
                            <p><span>0</span>грн</p>
                        </div>
                        <div class="result__discount">
                            <p>Знижка:</p>
                            <p><span>0</span>грн</p>
                        </div>
                        <div class="result__payable">
                            <p>До сплати:</p>
                            <p><span>0</span>грн</p>
                        </div>
                    </div>
                    <x-secondary-button secondaryBtnText="Продовжити покупки" />
                    <x-primary-button primaryBtnText="Підтвердити замовлення" />
                </div>
            </div>
        </div>
        @endif

    </div>
</div>