<div class="calculator__container">
    <div class="calculator__breadcrumbs">
        <p><a href="{{ route('page.Home') }}">Головна</a>/<a href="{{ route('page.calculator') }}">Калькулятор</a></p>
    </div>
    <div class="calculator__content">
        <div class="calculator__test__cables">
            @foreach ($testProducts as $index => $product)
            <div class="test__cable" data-index="{{ $index }}">
                <div class=" test__cable__header">
                    <h1>Дріт №{{ $index + 1 }}</h1>
                    <div class="cable__nav">
                        <x-ghost-btn ghostClass="editBtn" ghostBtnText="Редагувати" ghostBtnIconLeftSide="ph-fill ph-pencil" index="{{ $index }}"></x-ghost-btn>
                        <x-ghost-btn ghostClass="caret" ghostBtnIconRightSide="ph ph-caret-down" index="{{ $index }}"></x-ghost-btn>
                    </div>
                </div>
                <div class="test__cable__characteristics">
                    <ul class="product-characteristics">
                        @foreach ($product['characteristics'] as $label => $value)
                        <li><span class="label">{{ $label }}:</span><span class="dots"></span><span class="value">{{ $value }}</span></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="test__calculator editCalc" data-index="{{ $index }}">
                <div class="test__calculator__header">
                    <h1>
                        Дріт
                    </h1>
                    <div class="test__calculator__preview"></div>
                </div>
                <div class="test__calculator__charact">
                    <div class="left__side">
                        <h1>Сторона А</h1>
                        <div class="counters">
                            <x-counter.counter title="Зачистка А (мм)" value="0"></x-counter.counter>
                            <x-counter.counter title="Зазор А (мм)" value="0"></x-counter.counter>
                        </div>
                        <div class="swithers">
                            <x-switch.switch title="Закручування А" leftAnswer="Ні" rightAnswer="Так" :disabled="true"></x-switch.switch>
                            <x-switch.switch title="Залудження А" leftAnswer="Ні" rightAnswer="Так" :disabled="true"></x-switch.switch>
                            <x-switch.switch title="Клімпування А" leftAnswer="Ні" rightAnswer="Так" :disabled="true"></x-switch.switch>
                        </div>
                        <div class="test__calculator__info">
                            <p><i class="ph-fill ph-info"></i>Інструкція:</p>
                            <ol>
                                <li>Параметри «Зазор» не можуть перевищувати значення відповідної зачистки</li>
                                <li>Якщо зачистка дорівнює нулю або відсутній інструмент, функції закручування будуть недоступними або автоматично деактивовані</li>
                            </ol>
                        </div>
                    </div>
                    <div class="right__side">
                        <h1>Сторона B</h1>
                        <div class="counters">
                            <x-counter.counter title="Зачистка А (мм)" value="0"></x-counter.counter>
                            <x-counter.counter title="Зазор B (мм)" value="0"></x-counter.counter>
                        </div>
                        <div class="swithers">
                            <x-switch.switch title="Закручування B" leftAnswer="Ні" rightAnswer="Так"></x-switch.switch>
                            <x-switch.switch title="Залудження B" leftAnswer="Ні" rightAnswer="Так"></x-switch.switch>
                            <x-switch.switch title="Клімпування B" leftAnswer="Ні" rightAnswer="Так"></x-switch.switch>
                        </div>
                        <div class="test__calculator__info">
                            <p><i class="ph-fill ph-info"></i>Інструкція:</p>
                            <ol>
                                <li>Параметри «Зазор» не можуть перевищувати значення відповідної зачистки</li>
                                <li>Якщо зачистка дорівнює нулю або відсутній інструмент, функції закручування будуть недоступними або автоматично деактивовані</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="test__calculator__info">
                    <p><i class="ph-fill ph-info"></i>Інструкція:</p>
                    <ol>
                        <li>Параметри «Зазор» не можуть перевищувати значення відповідної зачистки</li>
                        <li>Якщо зачистка дорівнює нулю або відсутній інструмент, функції закручування будуть недоступними або автоматично деактивовані</li>
                    </ol>
                </div>
                <div class="test__calculator__params">
                    <div class="leftSide">
                        <h1>Загальні параметри</h1>
                        <div class="leftSide__data">

                            <x-counter.counter title="Довжина (мм)" value="800"></x-counter.counter>
                            <x-inputField.input-field label="Матеріал дроту" name="name" placeholder="Обрати"></x-inputField.input-field>
                            <x-inputField.input-field label="Колір" name="name" placeholder="Обрати"></x-inputField.input-field>
                        </div>
                    </div>
                    <div class="rightSide">
                        <h1>Упакування</h1>
                        <div class="rightSide__data">
                            <x-counter.counter title="Кількість (шт)" value="500"></x-counter.counter>
                            <x-counter.counter title="Фасування(шт/уп" value="100"></x-counter.counter>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="test__calculator">
                <div class="test__calculator__header">
                    <h1>
                        Дріт
                    </h1>
                    <div class="test__calculator__preview"></div>
                </div>
                <div class="test__calculator__charact">
                    <div class="left__side">
                        <h1>Сторона А</h1>
                        <div class="counters">
                            <x-counter.counter title="Зачистка А (мм)" value="0"></x-counter.counter>
                            <x-counter.counter title="Зазор А (мм)" value="0"></x-counter.counter>
                        </div>
                        <div class="swithers">
                            <x-switch.switch title="Закручування А" leftAnswer="Ні" rightAnswer="Так"></x-switch.switch>
                            <x-switch.switch title="Залудження А" leftAnswer="Ні" rightAnswer="Так"></x-switch.switch>
                            <x-switch.switch title="Клімпування А" leftAnswer="Ні" rightAnswer="Так"></x-switch.switch>
                        </div>
                        <div class="test__calculator__info">
                            <p><i class="ph-fill ph-info"></i>Інструкція:</p>
                            <ol>
                                <li>Параметри «Зазор» не можуть перевищувати значення відповідної зачистки</li>
                                <li>Якщо зачистка дорівнює нулю або відсутній інструмент, функції закручування будуть недоступними або автоматично деактивовані</li>
                            </ol>
                        </div>
                    </div>
                    <div class="right__side">
                        <h1>Сторона B</h1>
                        <div class="counters">
                            <x-counter.counter title="Зачистка А (мм)" value="0"></x-counter.counter>
                            <x-counter.counter title="Зазор B (мм)" value="0"></x-counter.counter>
                        </div>
                        <div class="swithers">
                            <x-switch.switch title="Закручування B" leftAnswer="Ні" rightAnswer="Так"></x-switch.switch>
                            <x-switch.switch title="Залудження B" leftAnswer="Ні" rightAnswer="Так"></x-switch.switch>
                            <x-switch.switch title="Клімпування B" leftAnswer="Ні" rightAnswer="Так"></x-switch.switch>
                        </div>
                        <div class="test__calculator__info">
                            <p><i class="ph-fill ph-info"></i>Інструкція:</p>
                            <ol>
                                <li>Параметри «Зазор» не можуть перевищувати значення відповідної зачистки</li>
                                <li>Якщо зачистка дорівнює нулю або відсутній інструмент, функції закручування будуть недоступними або автоматично деактивовані</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="test__calculator__info">
                    <p><i class="ph-fill ph-info"></i>Інструкція:</p>
                    <ol>
                        <li>Параметри «Зазор» не можуть перевищувати значення відповідної зачистки</li>
                        <li>Якщо зачистка дорівнює нулю або відсутній інструмент, функції закручування будуть недоступними або автоматично деактивовані</li>
                    </ol>
                </div>
                <div class="test__calculator__params">
                    <div class="leftSide">
                        <h1>Загальні параметри</h1>
                        <div class="leftSide__data">

                            <x-counter.counter title="Довжина (мм)" value="800"></x-counter.counter>
                            <x-inputField.input-field label="Матеріал дроту" name="name" placeholder="Обрати"></x-inputField.input-field>
                            <x-inputField.input-field label="Колір" name="name" placeholder="Обрати"></x-inputField.input-field>
                        </div>
                    </div>
                    <div class="rightSide">
                        <h1>Упакування</h1>
                        <div class="rightSide__data">
                            <x-counter.counter title="Кількість (шт)" value="500"></x-counter.counter>
                            <x-counter.counter title="Фасування(шт/уп" value="100"></x-counter.counter>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="calculator__btn">
        <x-secondary-button secondaryBtnText="Додати новий дріт" />
    </div>
    <form class="calculator__form">
        <h1 class="calculator__form__header">
            Замовник
        </h1>
        <div class="form__data">
            <x-inputField.input-field label="Ім'я" name="name" placeholder="Вкажіть ваше ім'я"></x-inputField.input-field>
            <x-inputField.input-field label="Прізвище" name="secondName" placeholder="Вкажіть ваше прізвище"></x-inputField.input-field>
            <x-inputField.input-field label="По батькові" name="lastName" placeholder="Вкажіть"></x-inputField.input-field>
            <x-inputField.input-field label="Номер телефону" name="phoneNumber" placeholder="+380 -- --- -- --"></x-inputField.input-field>
            <x-inputField.input-field label="Email" name="email" placeholder="Вкажіть пошту"></x-inputField.input-field>
        </div>
        <label>
            <input type="checkbox" name="check">
            <span><i class="ph ph-check"></i></span>
            Даю згоду на обробку персональної інформації
        </label>
    </form>
    <div class="calc__container__btn">
        <x-primary-button primaryBtnText="Надіслати" primaryClass="calculator__btn_calc" />
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const editButtons = document.querySelectorAll('.editBtn');
        editButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const index = btn.dataset.index;
                const targetCalc = document.querySelector(`.editCalc[data-index="${index}"]`);
                if (targetCalc) {
                    targetCalc.classList.toggle('active');
                }
                const productCard = document.querySelector(`.test__cable[data-index="${index}"]`);
                if (productCard && targetCalc) {
                    const chars = productCard.querySelectorAll('.product-characteristics li');
                    const inputs = targetCalc.querySelectorAll('input[type="number"]');
                    chars.forEach((li, i) => {
                        if (inputs[i]) {
                            inputs[i].value = li.querySelector('.value').textContent.trim();
                        }
                    });
                }
            });
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const openDetailsBtns = document.querySelectorAll('.caret');

        openDetailsBtns.forEach(item => {
            item.addEventListener('click', () => {
                const index = item.dataset.index;
                const target = document.querySelector(`.test__cable[data-index="${index}"] .test__cable__characteristics`);

                if (target) {
                    target.classList.toggle('active');
                }
            });
        });
    });
</script>