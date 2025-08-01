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

<body>
    <x-header></x-header>
    <main>
        <section>
            @include('components.banner')
        </section>
        <section>
            @include('components.benefits')
        </section>
        <section>
            @include('components.popularProducts')
        </section>
        <section>
            @include('components.categories')
        </section>
        <section>
            @include('components.howWorks')
        </section>
        <section>
            @include('components.responses')
        </section>
        <section>
            @include('components.ourMission')
        </section>
        <section>
            @include('components.questions')
        </section>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
@include('components.footer')

@include('components.modalWindows.menuModal')
@include('components.modalWindows.cartModal')

</html>