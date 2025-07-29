@php
$benefits=[
['title'=>'Економія часу', 'subtitle'=>'Не витрачаєш години на обрізання, зачищення чи лудіння дротів вручну', 'icon'=>'ph ph-timer'],
['title'=>'Жодного браку', 'subtitle'=>'Не витрачаєш години на обрізання, зачищення чи лудіння дротів вручну', 'icon'=>'ph ph-shield-star'],
['title'=>'Кабель під ТЗ', 'subtitle'=>'Замовляй потрібну довжину, обробку й кількість – все саме під твоє завдання', 'icon'=>'ph ph-factory'],
['title'=>'Малі обсяги — вигідно', 'subtitle'=>'Купуйте кастомні дроти навіть у малих об’ємах за вигідною ціною', 'icon'=>'ph ph-coins']
];
@endphp

<div class="benefits_container">
    @foreach ($benefits as $item )
    <div class="benefit_card">
        <i class="{{ $item['icon'] }}"></i>
        <div class="benefit_card_content">
            <h3>{{ $item['title'] }}</h3>
            <p>{{ $item['subtitle'] }}</p>
        </div>
    </div>
    @endforeach
</div>