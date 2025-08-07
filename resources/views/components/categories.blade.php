@php
$categories =[
['img'=>'category1.svg','title'=>'без обробки', 'subtitle'=>'кабель у первісному вигляді, без будь-якої підготовки кінців'],
['img'=>'category2.svg','title'=>'зачистка', 'subtitle'=>'видалена ізоляція з кінців кабелю, готовий до подальших робіт.'],
['img'=>'category3.svg','title'=>'зачистка + скучування', 'subtitle'=>'кінці кабелю зачищені та скручені для зручності монтажу'],
['img'=>'category4.svg','title'=>'зачистка + скучування + Залудження', 'subtitle'=>'підготовлений та залужений кабель для надійного паяння'],
['img'=>'category5.svg','title'=>'обтиск накінечника', 'subtitle'=>'кабель з обтиснутим накінечником для швидкого та надійного підключення.'],
]

@endphp

<div class="categories__container">
    <div class="categories__header {{ Route::currentRouteName() !== 'page.Home'? "hidden":'' }}">
        <h1 class="categories__title">Категорії кабелю</h1>
        <p class="categories__subtitle">
            Ознайомтесь з нашими найпопулярнішими категоріями, де ви знайдете найкращі рішення для вашого виробництва
        </p>
    </div>
    <div class="categories__slider {{ Route::currentRouteName() !== 'page.Home'? "hidden":'' }}">
        <div class="swiper categoriesSlider">
            <div class="swiper-wrapper">
                @foreach ($categories as $category )
                <div class="swiper-slide">
                    <x-picture-tag src="{{  asset('assets/'. $category['img'] )}}" />
                    <hr>
                    <h1>{{ $category['title'] }}</h1>
                    <p>{{ $category['subtitle'] }}</p>
                    <x-primary-button primaryBtnText="Переглянути" primaryBtnIconLeftSide="ph ph-plus" primaryClass="viewBtn" />
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
            <div class="categories__nav">
                <div class="prevBtnCategories" id="prevBtnCategories"><x-secondary-button secondaryBtnIconLeftSide="ph-fill ph-caret-left" /></div>
                <x-secondary-button secondaryBtnText="Переглянути каталог" secondaryClass="btnToCatalog" secondaryBtnIconRightSide="ph ph-caret-right" />
                <div class="nextBtnCategories" id="nextBtnCategories"><x-secondary-button secondaryBtnIconLeftSide="ph-fill ph-caret-right" /></i></div>
            </div>
        </div>
    </div>
    <x-methodsOfChoosing></x-methodsOfChoosing>
</div>