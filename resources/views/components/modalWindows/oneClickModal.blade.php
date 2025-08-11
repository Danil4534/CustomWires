@php
$chooseProductOneClick = session()->get('oneClickModalProduct');
@endphp

<div class="oneClickModal__container">
    <div class="oneClickModal__body">
        <i class="ph ph-x" id="closeOneClickModalBtn"></i>
        <h1 class="oneClickModal__title">
            Замовити в один клік
        </h1>
        <form action="" method="POST">
            @csrf
            <div class="form__wrapper">

                <div class="form__name">
                    <label for="name">Ім'я</label>
                    <div class="input__wrapper">
                        <input type="text" placeholder="Введіть ваше ім'я" name="name">
                        <i class="ph ph-x" id="clearIconField"></i>
                    </div>
                </div>
                <div class="form__phoneNumber">
                    <label for="phoneNumber">Номер телефону</label>
                    <div class="input__wrapper">
                        <input type="text" placeholder="+380 -- --- -- --" name="phoneNumber">
                        <i class="ph ph-x" id="clearIconField"></i>
                    </div>
                </div>
            </div>
            <div class="form__product">
                <div class="from__product__header">

                    <x-picture-tag src="{{  asset('assets/'. $chooseProductOneClick['img'][0]) }}" class="productImg" />
                    <div class="product__content">
                        <h1 class="product__name">{{ $chooseProductOneClick['name'] }}</h1>
                        <div class="product__discount">
                            <span>-{{ $chooseProductOneClick['discount'] }}%</span>
                            <p>250,00</p>
                        </div>
                        <div class="priceBlock">
                            <h2>000{{ $chooseProductOneClick['price'] }},00 <span>грн</span></h2>
                            <p>{{ $chooseProductOneClick['countInPackage'] }}шт</p>
                        </div>
                    </div>
                </div>
                <div class="form__product__bottom">
                    <h3>
                        Кількість
                        <p>200 <span>шт</span></p>
                    </h3>
                    <h3>
                        Вартість
                        <p>200 <span>грн</span></p>
                    </h3>
                </div>
            </div>



            <div class="form__bottom">

                <div class="form__check">
                    <label>
                        <input type="checkbox" name="check" checked>
                        <span><i class="ph ph-check"></i></span>
                        Даю згоду на обробку персональної інформації
                    </label>
                </div>
                <x-primary-button primaryBtnText="Надіслати" type="submit" primaryClass="form__btn" />
            </div>
        </form>
    </div>
</div>