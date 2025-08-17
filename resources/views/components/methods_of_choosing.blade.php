<div class="categories__methodsOfChoosing ">
    <div class="categories__quiz categoryBox">
        <x-picture-tag src="{{ asset('assets/cableLogo.svg') }}" alt="quizLogo" :lazy="true" class="categoryLogo" />
        <div class="categories__content">

            <h2 class="categories__quiz__title">Не знаєш, який кабель підійде?</h2>
            <p class="categories__quiz__subtitle">
                Відповідай на 4 запитання, щоб знайти потрібний варіант
            </p>
            <x-primary-button primaryBtnText="Підібрати" primaryBtnIconLeftSide="ph-fill ph-arrow-right" primaryClass="categories__quiz__btn" route="page.Quiz" />
        </div>
    </div>
    <div class="categories__tz categoryBox">
        <x-picture-tag src="{{ asset('assets/tzLogo.svg') }}" alt="quizLogo" :lazy="true" class="categoryLogo" />
        <div class="categories__content">

            <h2 class="categories__tz__title">Є готове ТЗ?</h2>
            <p class="categories__tz__subtitle">
                Введи свої параметри, щоб одразу отримати вартість і термін виготовлення
            </p>
            <x-primary-button primaryBtnText="Почати" primaryBtnIconLeftSide="ph-fill ph-arrow-right" primaryClass="categories__tz__btn" />
        </div>

    </div>
</div>