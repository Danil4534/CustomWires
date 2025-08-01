@php
$responses = [
['rating'=>4, 'user'=>['username'=>'Дмитро Кодієнко', 'role'=>'Постійний клієнт'], 'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui Більше'],
['rating'=>4, 'user'=>['username'=>'Дмитро Кодієнко', 'role'=>'Постійний клієнт'], 'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui Більше'],
['rating'=>4, 'user'=>['username'=>'Дмитро Кодієнко', 'role'=>'Постійний клієнт'], 'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui Більше'],
['rating'=>4, 'user'=>['username'=>'Дмитро Кодієнко', 'role'=>'Постійний клієнт'], 'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui Більше'],
['rating'=>4, 'user'=>['username'=>'Дмитро Кодієнко', 'role'=>'Постійний клієнт'], 'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui Більше'],
]
@endphp

<div class="responses_container">
    <div class="responses_header">
        <h1>ЩО ПРО НАС КАЖУТЬ?</h1>
        <div class="slider_nav">
            <div class="prevbtn" id="prevBtn"><x-secondary-button secondaryBtnIconLeftSide="ph-fill ph-caret-left" /></div>
            <div class="nextbtn" id="nextBtn"><x-secondary-button secondaryBtnIconLeftSide="ph-fill ph-caret-right" /></i></div>
        </div>
    </div>
    <div class="swiper responsesSwiper">
        <div class="swiper-wrapper">
            @foreach ($responses as $response )
            <div class="swiper-slide responseCard">
                <div class="responseCard_rating">
                    <h3>
                        {{ $response['rating'] }} / 5
                    </h3>
                    <div class="stars">
                        @for ($i = 1; $i<=5; $i++)
                            <i class="{{ $i <= $response['rating']? "ph-fill ph-star":"ph-fill ph-star empty" }}"></i>
                            @endfor
                    </div>
                </div>
                <div class="response_content">
                    <span>“</span>
                    <p>{{ $response['text'] }}</p>
                </div>
                <div class="responseCard_user">
                    <div class="user_avatar">
                        {{mb_substr($response['user']['username'],0,1)}}
                    </div>
                    <div class="user_info">
                        <h3> {{ $response['user']['username'] }}</h3>
                        <p> {{ $response['user']['role'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>

    </div>


</div>