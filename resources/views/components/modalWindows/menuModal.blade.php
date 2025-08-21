@php
$links=[
['linkName'=>'Головна','anchor'=>'/'],
['linkName'=>'Підібрати кабель','anchor'=>'/quiz'],
['linkName'=>'FAQ','anchor'=>''],
['linkName'=>'Калькулятор','anchor'=>'/calculator'],
['linkName'=>'Контакти','anchor'=>''],
]
@endphp

<div class="menuModal_container" id="menuModalContainer">
    <div class="menuModal_body" id="menuModalBody">
        <h1>Меню</h1>
        <i class="ph ph-x" id="closeModalMenu"></i>
        <div class="content">
            @foreach ($links as $link )
            <a href="{{ $link['anchor'] }}">{{ $link['linkName'] }} <i class="ph ph-caret-right"></i></a>
            @endforeach
        </div>
    </div>
</div>