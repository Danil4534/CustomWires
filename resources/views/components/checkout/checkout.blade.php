@php
$chooseProducts = session()->get('chooseProducts');
@endphp
<div class="checkout__container">
    <div class="form__order">
        <div class="from__order__header">
            <h1>Замовлення</h1>
            <x-secondary-button secondaryBtnText="Редагувати" secondaryBtnIconLeftSide="ph-fill ph-pencil"></x-secondary-button>
        </div>
        <div class="form__order__content">
            @foreach ($chooseProducts as $product)
            <div class="productCard">
                <div class="productCard__header">
                    <x-picture-tag src="{{asset($product['img'][0]) }}" />
                    <div>
                        <h3>{{ $product['name'] }}</h3>
                    </div>
                </div>

            </div>

            @endforeach
        </div>
    </div>
    <div class="form__customer">
        <div class="form__customer__header">
            <h1>Замовник</h1>
        </div>
        <div class="form__customer__content">
            <x-inputField.input-field label="Ім'я" name="name" placeholder="Вкажіть ваше ім'я"></x-inputField.input-field>
            <x-inputField.input-field label="Прізвище" name="secondName" placeholder="Вкажіть ваше прізвище"></x-inputField.input-field>
            <x-inputField.input-field label="По батькові" name="lastName" placeholder="Вкажіть"></x-inputField.input-field>
            <x-inputField.input-field label="Номер телефону" name="phoneNumber" placeholder="+380 -- --- -- --"></x-inputField.input-field>
            <x-inputField.input-field label="Email" name="email" placeholder="Вкажіть пошту"></x-inputField.input-field>
        </div>
    </div>
    <div class="form__delivery">
        <div class="form__delivery__header">
            <h1>Доставка</h1>
        </div>
        <div class="form__delivery__content">
            <div class="delivery__methodsOfDelivery">
                <div class="nova__post">
                    <x-picture-tag src="{{ asset('assets/nova_post.svg') }}"></x-picture-tag>
                    <p>Нова пошта</p>
                </div>
                <div class="novaPost__methods">
                    <div class="method__department">
                        <label for="novaPost__department">
                            <div class="label__content">
                                <i class="ph ph-garage"></i>
                                <p>Відділення Нової пошти</p>
                            </div>
                            <span>Доставка товару здійснюється до вантажного відділення Нової Пошти. Послуги доставки оплачуються окремо на відділенні Нової Пошти.</span>
                        </label>
                        <input type="radio"
                            id="novaPost__department"
                            name="novaPost_method"
                            value="department">
                    </div>
                    <div class="method__courier">
                        <label for="novaPost__courier">
                            <div class="label__content">
                                <i class="ph ph-truck"></i>
                                <p>Кур’єром Нової пошти на адресу</p>
                            </div>
                            <span>Доставка товару здійснюється до вантажного відділення Нової Пошти. Послуги доставки оплачуються окремо на відділенні Нової Пошти.</span>
                        </label>
                        <input type="radio"
                            id="novaPost__courier"
                            name="novaPost_method"
                            value="courier">
                    </div>
                </div>
                <hr>
                <div class="form__delivery__methodsOfDelivery__info">
                    <x-inputField.input-field label="Місто" name="city" placeholder="Вкажіть місто доставки"></x-inputField.input-field>
                    <x-inputField.input-field label="Відділення" name="post__department" placeholder="Вкажіть відділення НП"></x-inputField.input-field>
                    <div class="form__delivery__courier hidden">
                        <x-inputField.input-field label="Дім" name="post__home" placeholder="Вкажіть дім"></x-inputField.input-field>
                        <x-inputField.input-field label="Корпус" name="post__frame" placeholder="Вкажіть корпус"></x-inputField.input-field>
                        <x-inputField.input-field label="Квартира" name="post__apartment" placeholder="Вкажіть номер квартири"></x-inputField.input-field>
                    </div>
                    <div class="form__delivery__checkAnotherCustomer">
                        <label>
                            <input type="checkbox" name="checkAnotherCustomer" id="checkAnotherCustomer">
                            <span><i class="ph ph-check"></i></span>
                            Замовлення отримує інша особа
                        </label>
                    </div>
                    <div class="form__delivery__checkAnotherCustomer__hidden hidden">
                        <x-inputField.input-field label="Ім'я" name="anotherCustomer__name" placeholder="Вкажіть ваше ім'я"></x-inputField.input-field>
                        <x-inputField.input-field label="Прізвище" name="anotherCustomer__secondName" placeholder="Вкажіть ваше прізвище"></x-inputField.input-field>
                        <x-inputField.input-field label="По батькові" name="anotherCustomer__lastName" placeholder="Вкажіть"></x-inputField.input-field>
                        <x-inputField.input-field label="Номер телефону" name="anotherCustomer__phoneNumber" placeholder="+380 -- --- -- --"></x-inputField.input-field>
                    </div>

                    <div class="form__delivery__checkAddComment">
                        <label>
                            <input type="checkbox" name="checkAddComment" id="checkAddComment">
                            <span><i class="ph ph-check"></i></span>
                            Додати коментар до замовлення
                        </label>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form__methodsOfPayment">
        <div class="form__methodsOfPayment__header">
            <h1>Спосіб оплати</h1>
        </div>
        <div class="from__methodsOfPayment__content">

        </div>

    </div>
    <div class="form__result">
        <div class="checkout__result">
            <h1> Загальна сума замовлення
            </h1>
            <hr class="checkout__result__separator">
            <div class="result">
                <div class="result__orderPrice">
                    <p>Вартість замовлення</p>
                    <p><span>0</span>грн</p>
                </div>
                <div class="result__discount">
                    <p>Знижка:</p>
                    <p><span>0</span>грн</p>
                </div>
                <div class="result__delivery">
                    <p>Доставка:</p>
                    <p><span>За тарифами перевізника</span></p>
                </div>
                <div class="result__payable">
                    <p>До сплати:</p>
                    <p><span>0</span>грн</p>
                </div>

            </div>
            <x-primary-button primaryBtnText="Підтвердити замовлення" />
            <label>
                <input type="checkbox" name="check" checked>
                <span><i class="ph ph-check"></i></span>
                Підтверджую замовлення та погоджуюсь з правилами користування сайтом
            </label>
            <label>
                <input type="checkbox" name="check" checked>
                <span><i class="ph ph-check"></i></span>
                Даю згоду на обробку персональної інформації
            </label>

        </div>
    </div>
</div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const anotherCustomer = document.querySelector('#checkAnotherCustomer');
        const anotherCustomerInfo = document.querySelector('.form__delivery__checkAnotherCustomer__hidden')
        anotherCustomer.addEventListener('change', () => {
            anotherCustomerInfo.classList.toggle('hidden', !anotherCustomer.checked);
        });
    })
</script>