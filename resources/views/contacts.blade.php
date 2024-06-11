@extends('base')

@section('title', 'Контакты')

@section('content')
<div class="contacts-container">
    <h2>Контакты</h2>

    <div style="position:relative;overflow:hidden;" class="mt-10">
        <a href="https://yandex.ru/maps/org/pk_nord/153061254397/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">ПК Норд</a>
        <a href="https://yandex.ru/maps/50/perm/category/heating_equipment_and_systems/184107475/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Отопительное оборудование и системы в Перми</a>
        <a href="https://yandex.ru/maps/50/perm/category/metalwork/184106662/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:28px;">Металлообработка в Перми</a><iframe src="https://yandex.ru/map-widget/v1/?from=mapframe&ll=56.257147%2C57.993672&mode=search&oid=153061254397&ol=biz&z=17" frameborder="1" allowfullscreen="true" style="position:relative; width: 100%; height: 480px"></iframe>
    </div>

    <div class="contacts-info p-5 xl:p-20 lg:flex justify-between shadow-2xl container">
        <div class="row1">
            <p class="font-bold mb-2">Пермь</p>
            <p>ул. Героев Хасана, д. 7а, оф. 314 </p>
        </div>

        <div class="row2">
            <p class="font-bold mb-2">Телефон:</p>
            <p>
                +7 (342) 273-80-59<br>
                Добавочные:<br>
                104 — отдел продаж<br>
                999 — отдел по работе с персоналом<br>

                (Viber, Telegram, WhatsApp) Бухгалтерия:<br>
                +7 (965) 569-41-09</p>
        </div>

        <div class="row3">
            <p class="font-bold mb-2">Время работы:</p>
            <p>
                Пн-Пт: 9:00-18:00 <br>
                Cб-Вс: Выходной
            </p>
        </div>

        <div class="row4">
            <p class="font-bold mb-2">Электронная почта: </p>
            <p>sale@whitenord.com — отдел продаж<br>
                service@whitenord.com — отдел сервисного обслуживания<br>
                snab@whitenord.com — снабжение<br>
                booker@whitenord.com — бухгалтерия<br>
                staff@whitenord.com — отдел по работе с персоналом<br>
                info@whitenord.com — по остальным вопросам</p>
        </div>
    </div>
</div>
@endsection
