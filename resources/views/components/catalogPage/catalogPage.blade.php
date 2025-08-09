@php
$filsters=[
['title'=>'Тип обробки кінця', 'type'=>'default','variants'=>['Без обробки','Зачистка','Зачистка + скручування','Зачистка + скручування + залудження','Обтиск накінечника (XH2.54 / ZH1.5 / PH2.0)']],
['title'=>'Наявність', 'type'=>'default','variants'=>['В наявності','Під замовлення']],
['title'=>'Тип ізоляції', 'type'=>'default','variants'=>['PVC','Силікон']],
['title'=>'Довжина (мм)', 'type'=>'range','variants'=>['PVC','Силікон']],
['title'=>'Перетин жили', 'type'=>'default','variants'=>['30мм2 (AWG30)','40мм2 (AWG28–AWG27)','50мм2 (AWG26)']],
['title'=>'Тип жили', 'type'=>'default','variants'=>['Мідна','Луджена','Покрита міддю']],
]
@endphp

<div class="catalog__container">
    <div class="catalog__breadcrumbs">
        <p><a href="{{ route('page.Home') }}">Головна</a>/<a href="{{ route('page.catalog') }}">Каталог</a></p>
    </div>
    <div class="catalog__actions">
        <button class="catalog__FilterBtn"><i class="ph ph-funnel"></i> Фільтр</button>
        <button class="catalog__PopularBtn">Популярні <i class="ph-fill ph-caret-down"></i></button>
    </div>
    <div class="catalog__wrapper">
        <div class="catalog__filter">
            <div class="catalog__filter-content">

                @foreach ($filsters as $filter )
                <details>
                    <summary>{{$filter['title'] }}</summary>
                    <div class="details-content">
                        @if($filter['type']==='default')
                        @foreach ($filter['variants'] as $item )
                        <label>
                            <input type="checkbox" name="check">
                            <span><i class="ph ph-check"></i></span>
                            {{ $item }}
                        </label>
                        @endforeach
                        @else
                        <div class="range_container">
                            <div class="form_control">
                                <div class="form_control_container">
                                    <input class="form_control_container__time__input" type="text" id="fromInput" value="5" min="0" max="100" />
                                </div>
                                <div class="form_control_separator"></div>
                                <div class="form_control_container">
                                    <input class="form_control_container__time__input" type="text" id="toInput" value="100" min="0" max="100" />
                                </div>
                            </div>
                            <div class="sliders_control">
                                <input id="fromSlider" type="range" value="5" min="0" max="100" />
                                <input id="toSlider" type="range" value="100" min="0" max="100" />
                            </div>

                        </div>
                        @endif

                    </div>
                </details>
                @endforeach
            </div>
            <x-primary-button primaryBtnText="Показати" primaryClass="showProducts" />
        </div>
        <div class="catalog__list__wrapper">
            <h1 class="catalog__CountOfProducts"> Товарів знайдено: <span>11013</span> </h1>
            <div class="catalog__listOfProducts__wrapper">
                @foreach ($products as $product )
                <x-product-card :product="$product" />
                @endforeach
            </div>
            <div class="catalog__getMore">
                <x-primary-button primaryBtnText="Показати більше" primaryBtnIconLeftSide="ph ph-arrows-clockwise"></x-primary-button>
            </div>
        </div>
    </div>
</div>

<script>
    function controlFromInput(fromSlider, fromInput, toInput, controlSlider) {
        const [from, to] = getParsed(fromInput, toInput);
        fillSlider(fromInput, toInput, '#C6C6C6', '#FF6F39', controlSlider);
        if (from > to) {
            fromSlider.value = to;
            fromInput.value = to;
        } else {
            fromSlider.value = from;
        }
    }

    function controlToInput(toSlider, fromInput, toInput, controlSlider) {
        const [from, to] = getParsed(fromInput, toInput);
        fillSlider(fromInput, toInput, '#C6C6C6', '#FF6F39', controlSlider);
        setToggleAccessible(toInput);
        if (from <= to) {
            toSlider.value = to;
            toInput.value = to;
        } else {
            toInput.value = from;
        }
    }

    function controlFromSlider(fromSlider, toSlider, fromInput) {
        const [from, to] = getParsed(fromSlider, toSlider);
        fillSlider(fromSlider, toSlider, '#C6C6C6', '#FF6F39', toSlider);
        if (from > to) {
            fromSlider.value = to;
            fromInput.value = to;
        } else {
            fromInput.value = from;
        }
    }

    function controlToSlider(fromSlider, toSlider, toInput) {
        const [from, to] = getParsed(fromSlider, toSlider);
        fillSlider(fromSlider, toSlider, '#C6C6C6', '#FF6F39', toSlider);
        setToggleAccessible(toSlider);
        if (from <= to) {
            toSlider.value = to;
            toInput.value = to;
        } else {
            toInput.value = from;
            toSlider.value = from;
        }
    }

    function getParsed(currentFrom, currentTo) {
        const from = parseInt(currentFrom.value, 10);
        const to = parseInt(currentTo.value, 10);
        return [from, to];
    }

    function fillSlider(from, to, sliderColor, rangeColor, controlSlider) {
        const rangeDistance = to.max - to.min;
        const fromPosition = from.value - to.min;
        const toPosition = to.value - to.min;
        controlSlider.style.background = `linear-gradient(
      to right,
      ${sliderColor} 0%,
      ${sliderColor} ${(fromPosition)/(rangeDistance)*100}%,
      ${rangeColor} ${((fromPosition)/(rangeDistance))*100}%,
      ${rangeColor} ${(toPosition)/(rangeDistance)*100}%, 
      ${sliderColor} ${(toPosition)/(rangeDistance)*100}%, 
      ${sliderColor} 100%)`;
    }

    function setToggleAccessible(currentTarget) {
        const toSlider = document.querySelector('#toSlider');
        if (Number(currentTarget.value) <= 0) {
            toSlider.style.zIndex = 2;
        } else {
            toSlider.style.zIndex = 0;
        }
    }

    const fromSlider = document.querySelector('#fromSlider');
    const toSlider = document.querySelector('#toSlider');
    const fromInput = document.querySelector('#fromInput');
    const toInput = document.querySelector('#toInput');
    fillSlider(fromSlider, toSlider, '#C6C6C6', '#FF6F39', toSlider);
    setToggleAccessible(toSlider);

    fromSlider.oninput = () => controlFromSlider(fromSlider, toSlider, fromInput);
    toSlider.oninput = () => controlToSlider(fromSlider, toSlider, toInput);
    fromInput.oninput = () => controlFromInput(fromSlider, fromInput, toInput, toSlider);
    toInput.oninput = () => controlToInput(toSlider, fromInput, toInput, toSlider);
</script>