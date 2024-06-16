<!doctype html>
<html lang="ru" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <script src="{{ asset('js/email_copy.js') }}"></script>
    <link type="image/x-icon" rel="shortcut icon" href="{{ asset('images/favicon.png') }}" >
    @vite('resources/css/input.css')
    @stack('fancy')
</head>
<body>
<header>
    <div class="flex justify-between burger-menu-wrapper px-10 py-4 xl:hidden z-[999]">
        <a href="{{ route('index') }}"><img src="{{ asset('images/logo.png') }}" alt="logo" width="120"></a>

        <button class="xl:hidden" id="burger">
            <img src="{{ asset('images/list.svg') }}" width="40">
        </button>
    </div>

    <div class="desktop-menu hidden xl:block bg-white w-full">
        <div class="header-wrapper xl:container xl:h-20 xl:flex xl:justify-between">
            <div class="hidden logo-wrapper xl:flex gap-10 items-center">
                <a href="{{ route('index') }}"><img src="{{ asset('images/logo.png') }}" alt="logo" width="178"></a>
                <p class="text-sm text-gray-500">Сайт производственной <br> компании</p>
            </div>

            <div class="contacts-wrapper xl:flex gap-10 items-center text-center">
                <div class="email">
                    <p class="text-lg mt-2 xl:mt-0" id="email" onclick="copyEmail()">sale@whitenord.com</p>
                    <p class="text-gray-500 text-sm leading-[14px] mt-2 xl:mt-0">Приём заявок по e-mail<br>круглосуточно</p>
                </div>

                <div class="phone-numbers font-extrabold my-2 xl:mt-0">
                    <p>+7 (342) 273-01-95</p>
                    <p>8 (800) 222-49-58</p>
                </div>

                <button class="hidden xl:block bg-accentDark rounded-xl px-5 text-white h-[50px] hover:bg-accentYellow main-tranz">Заказать консультацию</button>
            </div>
        </div>

        <div class="menu xl:bg-accentDark xl:flex items-center">
            <ul class="xl:flex xl:text-white xl:w-fit mx-auto text">
                <li><a href="{{ route('services') }}">Каталог услуг</a></li>
                <li><a href="{{ route('news') }}">Новости</a></li>
                <li><a href="{{ route('about') }}">О компании</a></li>
{{--                <li><a href="">Парк станков</a></li>--}}{{-- (( --}}
                <li><a href="{{ route('works') }}">Наши работы</a></li>
                <li><a href="{{ route('contacts') }}">Контакты</a></li>
                <li><a href="{{ route('calculator') }}">Калькулятор</a></li>
            </ul>
        </div>
    </div>

</header>

<main>
    @yield('content')
</main>

<footer class="mt-20 bg-accentDark">
    <div class="footer-wrapper container py-10 xl:flex justify-between text-center xl:text-start">
        <ul class="text-white w-fit mx-auto xl:m-0">
            <li><a href="{{ route('services') }}">Каталог услуг</a></li>
            <li><a href="{{ route('news') }}">Новости</a></li>
            <li><a href="{{ route('about') }}">О компании</a></li>
            <li><a href="{{ route('works') }}">Наши работы</a></li>
            <li><a href="{{ route('contacts') }}">Контакты</a></li>
        </ul>

        <div class="contacts-wrapper text-white mt-4">
            <p>Электронный адрес: sale@whitenord.com</p>
            <p class="mt-5">Телефон: +7 (342) 273-80-59</p>
        </div>

        <div class="social-wrapper mt-4 w-[155px] mx-auto xl:m-0">
            <div class="social-icons flex gap-2">
                <a href="https://vk.com/nordheatexchanger"><img src="{{ asset('images/footer/vk.png') }}" width="35" alt="vk"></a>
                <a href="https://t.me/wtnord_bot"><img src="{{ asset('images/footer/telegram.png') }}" width="32" alt="telegram"></a>
                <a href="viber://pa?chatURI=whitenord"><img src="{{ asset('images/footer/viber.png') }}" width="32" alt="viber"></a>
                <a href="https://dzen.ru/whitenord"><img src="{{ asset('images/footer/zen.png') }}" width="32" alt="zen"></a>
            </div>

            <a href="https://rab-it.ru/"><img class="mt-8" src="{{ asset('images/footer/logo.svg') }}" alt=""></a>

            <a href="{{ route('index') }}"><img class="mt-8" src="{{ asset('images/footer/footer-logo.png') }}" alt=""></a>
        </div>
    </div>
</footer>
@stack('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("burger").addEventListener("click", function(){
            document.querySelector(".desktop-menu").classList.toggle("open");
        })
    })
</script>
</body>
</html>
