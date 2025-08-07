@php
$links = [['text'=>'Головна', 'anchor'=>'']
,['text'=>'Каталог', 'anchor'=>''],['text'=>'Підібрати дріт', 'anchor'=>''],['text'=>'Калькулятор', 'anchor'=>'']];

$chooseProducts = count(session('chooseProducts',[]))
@endphp


<header>
    <div class="header_leftSide_wrapper">
        <div class="header_leftSide">
            <x-ghost-btn ghostBtnText="Меню" ghostBtnIconLeftSide="ph ph-list" id="menuBtn"></x-ghost-btn>
            <a href="{{ route('page.Home') }}"><x-picture-tag src="{{asset('assets/logo_375.svg')  }}" alt="logo375" lazy="true" /></a>
        </div>
        <div class="header_nav">
            <nav>
                <ul>
                    @foreach ($links as $link )
                    <li><a href="">{{ $link['text'] }}</a></li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
    <div class="header_rightSide">
        <x-secondary-button secondaryClass="header_r_link" secondaryBtnIconLeftSide="ph-fill  ph-instagram-logo"></x-secondary-button>
        <x-secondary-button secondaryClass="header_r_link" secondaryBtnIconLeftSide="ph-fill ph-facebook-logo"></x-secondary-button>
        <x-secondary-button secondaryClass="header_r_link" secondaryBtnIconLeftSide="ph-fill ph-youtube-logo"></x-secondary-button>
        <x-secondary-button secondaryBtnText='Каталог' secondaryBtnIconLeftSide="ph-fill ph-shopping-bag"></x-secondary-button>
        <x-primary-button primaryBtnText="Кошик" primaryBtnIconLeftSide="ph-fill ph-basket" counter={{$chooseProducts}} id="btnToCatalog"></x-primary-button>
    </div>
</header>