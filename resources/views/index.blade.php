@extends('base')

@section('title', 'WhiteNord')

@section('content')
    <div class="main-background bg-background bg-cover w-full h-[700px] flex justify-center items-center">
        <div class="image-content-wrapper container text-white">
            <img src="{{ asset('images/whitenord.png') }}" alt="whitenord">
            <p class="mt-5 text-2xl lg:text-5xl">Услуги обработки</p>
            <p class="mt-5 text-xl lg:text-2xl">Оказываем комплекс услуг по металлообработке: фрезерование, сверление, развертывание, нарезание резьбы.
                <br>
                Работаем с крупногабаритными изделиями из черных, цветных металлов, легированных сталей и композитных материалов.</p>
            <a href="#services" class="block bg-accentYellow mt-20 px-8 py-4 rounded-full text-xl w-fit mx-auto hover:bg-accentDark main-tranz">К каталогу
                услуг</a>
        </div>
    </div>

    <div class="services container">
        <h2 id="services">Услуги</h2>

        <div class="services-wrapper mt-10 xl:mt-20 flex justify-center sm:justify-between flex-wrap gap-y-12">

            @foreach($services as $service)
                <div class="service-card overflow-hidden rounded-lg">
                    <div class="service-image bg-cover w-[300px] h-[361px] xl:w-[390px] xl:h-[470px] relative transition-all duration-300 hover:scale-110" style="background-image: url('{{ $service->image }}')">
                        <div
                            class="black-service-wrapper flex items-center w-full h-full bg-gradient-to-t from-black to-transparent">
                            <p class="text-accentYellow w-full text-center text-4xl xl:text-6xl">{{ $service->name }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <a class="block bg-accentYellow mt-16 px-8 py-4 rounded-full text-xl w-fit mx-auto text-white hover:bg-accentDark main-tranz" href="{{ route('services') }}">Все услуги</a>
    </div>

    <div class="advantages container">
        <h2>Преимущества</h2>

        <div class="advantages-wrapper mt-10 xl:mt-20 lg:flex justify-between">
            <div class="advantage-card flex items-center flex-col lg:w-1/4">
                <img src="{{ asset('images/advantages/boxes.svg') }}" alt="advantage" class="h-20">
                <h6 class="mt-10">Любые объемы</h6>
                <p class="text-center text-gray-600">Беремся за единичные и серийные заказы любой сложности</p>
            </div>

            <div class="advantage-card flex items-center flex-col lg:w-1/4 mt-10 lg:mt-0">
                <img src="{{ asset('images/advantages/calendar3.svg') }}" alt="advantage"  class="h-20">
                <h6 class="mt-10">Выгодные условия</h6>
                <p class="text-center  text-gray-600">Гарантируем оптимальные сроки и стоимость выполненных работ</p>
            </div>

            <div class="advantage-card flex items-center flex-col lg:w-1/4 mt-10 lg:mt-0">
                <img src="{{ asset('images/advantages/magic.svg') }}" alt="advantage"  class="h-20">
                <h6 class="mt-10">Опыт работы</h6>
                <p class="text-center  text-gray-600">Суммарный опыт работы наших сотрудников в металлообработке более 10 лет</p>
            </div>

            <div class="advantage-card flex items-center flex-col lg:w-1/4 mt-10 lg:mt-0">
                <img src="{{ asset('images/advantages/pin-map.svg') }}" alt="advantage"  class="h-20">
                <h6 class="mt-10">Широкая география</h6>
                <p class="text-center  text-gray-600">Сотрудничаем с компаниями и отправляем заказы по всей России</p>
            </div>
        </div>
    </div>

    <div class="form-container mt-10 xl:mt-20 xl:bg-form-bg">
        <div class="form-wrapper xl:container xl:flex justify-end">
            <form action="{{ route('send') }}" method="post" class="bg-accentDark xl:w-2/4 xl:h-[700px] flex flex-col">
                @csrf
                <h2 class="text-white mt-16 text-center text-5xl font-bold">Обратная связь</h2>

                <input class="form-input" type="text" placeholder="Ваше имя*" name="name" pattern="[А-Яа-яЁё ]+" required>

                <input class="form-input" type="text" placeholder="Ваш вопрос*" name="question" pattern="[А-Яа-яЁёA-Za-z.,:;?!-)(-+=%# ]+" required>

                <input class="form-input" type="text" placeholder="Номер телефона*" name="number" id="phone" required>

                <input class="form-input" type="email" placeholder="Электронная почта" name="email">

                <div class="checkbox-wrapper form-input w-3/4 mx-auto border-none">
                    <input type="checkbox" name="agree" required>
                    <label for="agree" class="text-lg">Я согласен(а) на <a class="underline" href="https://whitenord.com/company/consent/">обработку персональных данных</a></label>
                </div>

                <button class="bg-accentYellow mt-5 px-8 py-4 rounded-full text-xl w-fit mx-auto text-white hover:bg-accentDark main-tranz mb-10">Отправить</button>
            </form>
        </div>
    </div>

    <div class="news-container container">
        <h2>Новости</h2>

        <div class="news-wrapper mt-10 xl:mt-20 flex justify-center lg:justify-between flex-wrap gap-y-12">
            @foreach($news as $new)
                <a href="{{ route('show.news', ['new' => $new->id]) }}" class="news-card w-[390px]">
                    <img src="{{ $new->image }}" alt="" class="w-full h-60 bg-cover shadow-2xl">
                    <div class="news-card-content mt-4">
                        <h4 class="text-2xl">{{ $new->title }}</h4>
                        @php
                            $date = new \Carbon\Carbon($new->created_at);
                        @endphp
                        <p class="date">{{ $date->isoFormat("D MMMM") }}</p>

                    </div>
                </a>
            @endforeach
        </div>
        <a class="block bg-accentYellow mt-16 px-8 py-4 rounded-full text-xl w-fit mx-auto text-white hover:bg-accentDark main-tranz" href="{{ route('news') }}">Все новости</a>
    </div>

    <div style="position:relative;overflow:hidden;" class="mt-10 xl:mt-20">
        <a href="https://yandex.ru/maps/org/pk_nord/153061254397/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">ПК Норд</a>
        <a href="https://yandex.ru/maps/50/perm/category/heating_equipment_and_systems/184107475/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Отопительное оборудование и системы в Перми</a>
        <a href="https://yandex.ru/maps/50/perm/category/metalwork/184106662/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:28px;">Металлообработка в Перми</a><iframe src="https://yandex.ru/map-widget/v1/?from=mapframe&ll=56.257147%2C57.993672&mode=search&oid=153061254397&ol=biz&z=17" frameborder="1" allowfullscreen="true" style="position:relative; width: 100%; height: 480px"></iframe>
    </div>

    <script>
        var phoneInput = document.getElementById('phone');
        var myForm = document.forms.myForm;
        var result = document.getElementById('result');

        phoneInput.addEventListener('input', function (e) {
            var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
            e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
        });

        myForm.addEventListener('submit', function(e) {
            phoneInput.value = phoneInput.value.replace(/\D/g, '');
            result.innerText = phoneInput.value;

            e.preventDefault();
        });

    </script>

@endsection
