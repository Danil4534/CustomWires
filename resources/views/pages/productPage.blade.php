<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/fill/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    @vite(['resources/scss/app.scss','resources/js/app.js'])
</head>


@php
$productBenefits = [
['title'=>'Доставка', 'subtitle'=>'Доставляємо по всій Україні Новою Поштою. Відправляємо замовлення протягом 1–2 робочих днів після підтвердження.', 'icon'=>'ph ph-truck'],
['title'=>'Оплата', 'subtitle'=>'Оплата при отриманні або банківським переказом. Можливе виставлення рахунку для юридичних осіб.', 'icon'=>'ph ph-money'],
['title'=>'Гарантії', 'subtitle'=>'Ми перевіряємо кожен дріт перед відправкою. У разі браку — безкоштовно замінюємо або повертаємо кошти.', 'icon'=>'ph ph-shield-star'],]
@endphp

<body>
    <x-header></x-header>
    <main>
        <section>
            @include('components.productPreview', ['chooseProduct'=>$chooseProduct])
        </section>
        <section>
            @include('components.benefits', ['benefits'=>$productBenefits])
        </section>
        <section>
            @include('components.popularProducts')
        </section>
        <section>
            @include('components.categories' )
        </section>

        <section>
            @include('components.feedBack')
        </section>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
@include('components.footer')
@include('components.modalWindows.menuModal')
@include('components.modalWindows.cartModal')
@include('components.modalWindows.oneClickModal')
@include('components.modalWindows.successModal')



</html>