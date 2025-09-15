@php
$filters=[
['title'=>'Тип обробки кінця', 'type'=>'default','variants'=>['Без обробки','Зачистка','Зачистка + скручування','Зачистка + скручування + залудження','Обтиск накінечника (XH2.54 / ZH1.5 / PH2.0)']],
['title'=>'Наявність', 'type'=>'default','variants'=>['В наявності','Під замовлення']],
['title'=>'Довжина (мм)', 'type'=>'range','variants'=>['PVC','Силікон']],
['title'=>'Тип ізоляції', 'type'=>'default','variants'=>['PVC','Силікон']],
['title'=>'Перетин жили', 'type'=>'default','variants'=>['30мм2 (AWG30)','40мм2 (AWG28–AWG27)','50мм2 (AWG26)']],
['title'=>'Тип жили', 'type'=>'default','variants'=>['Мідна','Луджена','Покрита міддю']],
];
$productsForFilter = $products


@endphp

@foreach ($filters as $filter)
<details open>
    <summary>{{ $filter['title'] }}</summary>
    <div class="details-content">
        @if($filter['type'] === 'default')
        @foreach ($filter['variants'] as $item)
        @php
        $count = count(array_filter($productsForFilter, function ($product) use ($filter, $item) {
        $chars = $product['characteristics'];
        if ($filter['title'] === 'Наявність') {
        return $product['inStock'] ? 'В наявності' === $item : 'Під замовлення' === $item;
        }
        if ($filter['title'] === 'Тип ізоляції') {
        return isset($chars['Ізоляція']) && $chars['Ізоляція'] === $item;
        }
        if ($filter['title'] === 'Перетин жили') {
        return isset($chars['Перетин']) && $chars['Перетин'] === $item;
        }
        if ($filter['title'] === 'Тип жили') {
        return isset($chars['Тип жили']) && $chars['Тип жили'] === $item;
        }
        if ($filter['title'] === 'Тип обробки кінця') {
        return isset($chars['Обробка']) && $chars['Обробка'] === $item;
        }
        return false;
        }));
        @endphp
        <label>
            <div class="checkbox__item">
                <input type="checkbox" name="{{ $item }}" value="{{ $item }}">
                <span><i class="ph ph-check"></i></span>
                {{ $item }}
            </div>
            <div class="checkbox__count">({{ $count }})</div>
        </label>
        @endforeach
        @else
        <div class="range_container">
            <div class="form_control">
                <div class="form_control_container">
                    <input class="form_control_container__time__input fromInput" type="text" value="5" />
                </div>
                <div class="form_control_separator"></div>
                <div class="form_control_container">
                    <input class="form_control_container__time__input toInput" type="text" value="100" />
                </div>
            </div>
            <div class="slider__wrapper">
                <div id="slider"></div>
            </div>
        </div>
        @endif
    </div>
</details>
@endforeach

<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.7.1/nouislider.min.js"></script>