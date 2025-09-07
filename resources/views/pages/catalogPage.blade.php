<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/fill/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.7.1/nouislider.min.css" rel="stylesheet">
    @vite(['resources/scss/app.scss','resources/js/app.js'])
</head>

<body>
    @include('components.header')
    <main>
        <section>
            @include('components.catalogPage.catalog')
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
@include('components.modalWindows.filterModal')

</html>