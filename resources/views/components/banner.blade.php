@php
$sliderContent = [
['img'=>'assets/bannerPicture.svg'],
['img'=>'assets/bannerPicture.svg'],
['img'=>'assets/bannerPicture.svg'],
['img'=>'assets/bannerPicture.svg'],
['img'=>'assets/bannerPicture.svg'],
]

@endphp


<div class="banner_container">
    <h1>
        МЕНЬШЕ БРАКУ <span>—</span> <br>
        БІЛЬШЕ ШВИДКОСТІ.
    </h1>
    <div class="banner_content">
        <div class="banner">
            <x-picture-tag src="{{ asset('assets/banner375.svg') }}"></x-picture-tag>
        </div>
        <div class="swiper bannerSlider">
            <div class="swiper-wrapper">
                @foreach ($sliderContent as $slide )
                <div class="swiper-slide">
                    <x-picture-tag src="{{ asset($slide['img']) }}" />
                </div>
                @endforeach
            </div>
            <div class="bannerSlider__nav">
                <div class="bannerSlide__prev" id="bannerSlide__prev"><x-secondary-button secondaryBtnIconLeftSide="ph-fill ph-caret-left" /></div>
                <div class="bannerSlide__next" id="bannerSlide__next"><x-secondary-button secondaryBtnIconLeftSide="ph-fill ph-caret-right" /></div>
            </div>
        </div>
        <div class="banner_content_prodCard">
            <x-picture-tag src="{{ asset('assets/exampleCable.svg') }}" class="cablePicture" />
            <div class="prodCard_content">
                <h2>Дріт монтажний 24AWG (0,2 мм2), 20 см,<br /> 1BLK02-3STT-20-3STT, чорний, PVC,  упаковка 100 шт</h2>
                <hr />
                <div class="prodCard_content_bottomBox">
                    <p>190.00 ГРН / <span>100шт.</span> </p>
                    <a href="">Переглянути<i class="ph ph-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>