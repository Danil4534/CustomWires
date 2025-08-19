<div class="calculator__container">
    <div class="calculator__breadcrumbs">
        <p><a href="{{ route('page.Home') }}">Головна</a>/<a href="{{ route('page.calculator') }}">Калькулятор</a></p>
    </div>
    <div class="calculator__content">
        <div class="calculator__test__cables">
            @foreach ($testProducts as $index => $product)
            <div class="test__cable">
                <div class="test__cable__header">
                    <h1>Дріт №{{ $index + 1 }}</h1>
                    <x-ghost-btn ghostBtnText="Редагувати" ghostBtnIconLeftSide="ph-fill ph-pencil"></x-ghost-btn>
                </div>
                <div class="test__cable__characteristics">
                    <ul class="product-characteristics">
                        @foreach ($product['characteristics'] as $label => $value)
                        <li><span class="label">{{ $label }}:</span><span class="dots"></span><span class="value">{{ $value }}</span></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="test__calculator">
                <div class="test__calculator__header">
                    <h1>
                        Дріт
                    </h1>
                </div>
                <div class="test__calculator__preview"></div>
            </div>
            @endforeach
        </div>

    </div>
    <form class="calculator__form">
        <h1 class="calculator__form__header">
            Замовник
        </h1>
        <x-inputField.input-field label="Ім'я" name="name" placeholder="Вкажіть ваше ім'я"></x-inputField.input-field>
        <x-inputField.input-field label="Прізвище" name="secondName" placeholder="Вкажіть ваше прізвище"></x-inputField.input-field>
        <x-inputField.input-field label="По батькові" name="lastName" placeholder="Вкажіть"></x-inputField.input-field>
        <x-inputField.input-field label="Номер телефону" name="phoneNumber" placeholder="+380 -- --- -- --"></x-inputField.input-field>
        <x-inputField.input-field label="Email" name="email" placeholder="Вкажіть пошту"></x-inputField.input-field>
        <label>
            <input type="checkbox" name="check">
            <span><i class="ph ph-check"></i></span>
            Даю згоду на обробку персональної інформації
        </label>
        <x-primary-button primaryBtnText="Розрахувати" />
    </form>
</div>