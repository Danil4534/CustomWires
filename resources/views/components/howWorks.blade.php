@php
$readyCable = [
['id'=>1, 'title'=>'ОФОРМЛЯЄМО ЗАМОВЛЕННЯ', 'subtitle'=>'Обираєте потрібний дріт у каталозі та додаєте до кошика'],
['id'=>2, 'title'=>'МИ ПЕРЕВІРЯЄМО СПРАВНІСТЬ', 'subtitle'=>'Перевіряємо наявність, відповідність і якість перед відправкою'],
['id'=>3, 'title'=>'ВІДПРАВЛЯЄМО ВАШЕ ЗАМОВЛЕННЯ', 'subtitle'=>'Упаковуємо та передаємо на Нову Пошту того ж або наступного дня'],
['id'=>4, 'title'=>'ОТРИМУЄТЕ ДРІТ — ГОТОВИЙ ДО МОНТАЖУ', 'subtitle'=>'Без зайвих маніпуляцій — просто використовуйте в проєкті']
];

$production = [
['id'=>1, 'title'=>'НАДСИЛАЄТЕ ТЕХНІЧНЕ ЗАВДАННЯ', 'subtitle'=>'Передаєте креслення, опис або специфікацію через форму на сайті чи електронну пошту'],
['id'=>2, 'title'=>'УТОЧНЮЄМО ДЕТАЛІ', 'subtitle'=>'Ми зв’язуємось із вами, щоб уточнити деталі, запропонувати оптимальні рішення та узгодити терміни'],
['id'=>3, 'title'=>'ВИГОТОВЛЯЄМО ТА ТЕСТУЄМО', 'subtitle'=>'Наші інженери готують технічну документацію, після чого запускаємо замовлення у виробництво'],
['id'=>4, 'title'=>'ОТРИМУЄТЕ ДРІТ — ГОТОВИЙ ДО МОНТАЖУ', 'subtitle'=>'Без зайвих маніпуляцій — просто використовуйте в проєкті']
];
@endphp

<div class="howWorks_container">
    <h1>Як ми працюємо?</h1>
    <p>Ми зробили процес максимально зручним, зрозумілим і прозорим - незалежно від того, чи ви обираєте з каталогу, чи надсилаєте власне технічне завдання.</p>
    <hr>
    <input type="radio" name="option" id="opt1" hidden checked>
    <input type="radio" name="option" id="opt2" hidden>
    <div class="howWorks_tabs">
        <div class="tabs">
            <label for="opt1" class="tabLabel">
                <div class="tab">Готовий кабель</div>
            </label>

            <label for="opt2" class="tabLabel">
                <div class="tab">Виготовлення під тз</div>
            </label>
        </div>

        <div class="content content1">
            <ul>
                @foreach ($readyCable as $step)
                <li>
                    <h1>{{ $step['id'] }}</h1>
                    <h3>{{ $step['title'] }}</h3>
                    <p>{{ $step['subtitle'] }}</p>
                </li>
                @endforeach
            </ul>
            <x-secondary-button secondaryBtnText="Переглянути Каталог" secondaryBtnIconRightSide="ph ph-caret-right" secondaryClass="btnCatalog" />
        </div>

        <div class="content content2">
            <ul>
                @foreach ($production as $step)
                <li>
                    <h1>{{ $step['id'] }}</h1>
                    <h3>{{ $step['title'] }}</h3>
                    <p>{{ $step['subtitle'] }}</p>
                </li>
                @endforeach
            </ul>
            <x-secondary-button secondaryBtnText="До конфігуратора" secondaryBtnIconRightSide="ph ph-caret-right" secondaryClass="btnConfigurator" />
        </div>
    </div>
</div>