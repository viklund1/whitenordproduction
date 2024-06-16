@extends('base')

@section('title', 'Калькулятор газовой резки')

@section('content')
    <div class="bg-accentDark xl:bg-calculator bg-cover w-full xl:h-[773px] text-white pb-10 xl:pb-0">
        <h2 class="pt-4">Рассчёт стоимости газовой резки</h2>

        <div class="calc-container container">
            <div class="calc-wrapper xl:flex justify-around xl:h-[500px] text-xl align-middle items-center">
                <form class="flex flex-col calc-form w-80 mt-10 mx-auto">
                    <label for="name">Деталь</label>
                    <select id="name">
                        <option class="font-mulish font-light" value="156.22">Косынка 2Л ф125</option>
                        <option value="240.2">Косынка 1Л ф120</option>
                        <option value="250.22">Косынка 2Л ф93</option>
                        <option value="199.25">Лопасть (верх)</option>
                    </select>

                    <label class="mt-5" for="amount">Количество</label>
                    <input type="number" id="amount" min="1" value="1">

                    <label class="mt-5" for="metal">Металл</label>
                    <select id="metal">
                        <option value="own">Свой</option>
                        <option value="company">За счёт компании</option>
                    </select>

                    <div id="count" class="bg-accentYellow mt-10 py-2.5 rounded-md text-xl hover:bg-accentDark main-tranz text-center">Рассчитать</div>
                </form>

                <div class="info w-72 xl:w-96 mt-10 text-center xl:text-start mx-auto">
                    <p class="text-2xl font-bold">Важно</p>
                    <p>Все расчёты являются примерными и берутся из средних показателей стоимости. Окончательная стоимость утверждается непосредственно при заключении договора.</p>
                    <p id="totalField" class="mt-10 text-2xl">Стоимость: </p>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            function tap() {
                const name = parseFloat(document.getElementById('name').value);
                const amount = parseFloat(document.getElementById('amount').value);
                const metalType = document.getElementById('metal').value;
                let metalCost;
                if(metalType === 'own') metalCost = 0;
                if(metalType === 'company') {
                    const nameType = document.getElementById('name').value;
                    switch (nameType) {
                        case '156.22':
                            metalCost = 66.6;
                            break;
                        case '240.2':
                            metalCost = 270;
                            break;
                        case '250.22':
                            metalCost = 15.66;
                            break;
                        case '199.25':
                            metalCost = 189;
                            break;
                    }
                }

                let total = (name * amount) + (metalCost * amount);

                const totalField = document.getElementById('totalField');
                totalField.innerHTML = 'Стоимость: ' + total.toFixed(2) + ' рублей';
            }

            const button = document.querySelector('#count');
            button.addEventListener('click', tap);
        });
    </script>
@endsection
