@push('title_base')
    Pactica 1
@endpush

@push('styles')
    <style>
        ul.pagination {
            display: inline-block;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        ul.pagination li {
            display: inline;
        }

        ul.pagination li a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color .3s;
            border: 1px solid #ddd;
        }

        ul.pagination li a.active {
            background-color: #4CAF50;
            color: white;
            border: 1px solid #4CAF50;
        }

        ul.pagination li a:hover:not(.active) {
            background-color: #ddd;
        }

        .mb {
            margin-bottom: 30px;
        }

    </style>
@endpush
<div>
    <div class="container mb">
        @livewire('crumbs.nav-bar-component')
    </div>

<div class="container">
    <div class="tible">
        <h1>Calculadora de Divisa</h1>
        <h1>Código JavaScript Ejemplo 32</h1>
        <div class="content">
            <pre class="prettyprint linenums:1"><code class="language-javascript">

             const dropList = document.querySelectorAll(".drop-list select"),
            fromCurrency = document.querySelector(".from select"),
            toCurrency = document.querySelector(".to select"),
            getButton = document.querySelector("form button");



             for (let i = 0; i < dropList.length; i++) {
            for (currency_code in country_code) {
                let selected;
                if (i == 0) {
                    selected = currency_code == "USD" ? "selected" : "";
                } else if (i == 1) {
                    selected = currency_code == "MXN" ? "selected" : "";
                }
                let optionTag = `<option value="${currency_code}"${selected}>${currency_code}</option>`;
                dropList[i].insertAdjacentHTML("beforeend", optionTag);
            }
            dropList[i].addEventListener("change", e => {
                loadFlag(e.target);
            });
        }

               function loadFlag(element) {
            for (code in country_code) {
                if (code == element.value) {
                    let imgTag = element.parentElement.querySelector("img");
                    imgTag.src = `https://www.countryflags.io/${country_code[code]}/flat/64.png`
                }
            }
        }

        window.addEventListener('load', () => {

            getExchangeRate();
        });
        getButton.addEventListener('click', e => {
            e.preventDefault();
            getExchangeRate();
        });

        const exchangeIcon = document.querySelector(".drop-list .icon");
        exchangeIcon.addEventListener('click', () => {
            let tempCode = fromCurrency.value;
            fromCurrency.value = toCurrency.value;
            toCurrency.value = tempCode;
            loadFlag(fromCurrency);
            loadFlag(toCurrency);
            getExchangeRate();
        });

        function getExchangeRate() {
            const amount = document.querySelector(".amount input"),
                exchangerRateTxt = document.querySelector(".exchange-rate");
            let amountVal = amount.value;
            if (amountVal == "" || amountVal == "0") {
                amount.value = '1';
                amountVal = 1;
            }
            exchangerRateTxt.innerText = "Get Exchange Rate";

            let url = `https://v6.exchangerate-api.com/v6/8ce3330ea016166e6349e07e/latest/${fromCurrency.value}`;
            fetch(url).then(response => response.json()).then(result => {
                let exchangeRate = result.conversion_rates[toCurrency.value];
                let totalExchangeRate = (amountVal * exchangeRate).toFixed(2);

                exchangerRateTxt.innerText =
                    `${amountVal} ${fromCurrency.value} = ${totalExchangeRate} ${toCurrency.value}`;
            }).catch(() => {
                exchangerRateTxt.innerText = "Something went wrong";
            });
        }

    </code></pre>
        </div>


    </div>
    <a href="http://practicasdiarias.test/general/currency">Ejemplo</a>

    <div class="container">
        <div class="tible">
            <h1>Hola mundo</h1>
            <h1>Código JavaScript Ejemplo 33</h1>
            <div class="content">
                <pre class="prettyprint linenums:1"><code class="language-javascript">
                    Pre-fomateo de formateo de fecha con javascript

                    var date = "8/9/2021";

                    var result = date.split('/');

                    for( var i = 2; i--; )
                result[i] = ("0" + result[i]).slice(-2);

                result = result.reverse().join('');

                debuelve "202198" //Elimina la barra

                pre-formateo de 2021/9/13

                function processDate(dStr) {
                    var d = new Date(dStr);
                    return d.getFullYear() + (d.getMonth() + 1) + d.getDate();
                }


                processDate("8/9/2010");

                //Exprecion regular

                "8/9/2010".replace(/([0-9]+)\/([0-9]+)\/([0-9]+)/,"$3$2$1")

                result = "201098"

                //Formateo de Fecha

                date.toString("yyyyMMdd");

        </code></pre>
            </div>

        </div>

        <div class="container">
            <div class="tible">
                <h1>Hola mundo</h1>
                <h1>Código JavaScript Ejemplo 34</h1>
                <div class="content">
                    <pre class="prettyprint linenums:1"><code class="language-javascript">
                        Relog digital
                        let section = document.querySelector("section"),
            icons = document.querySelector(".icons");

        icons.onclick = () => {
            section.classList.toggle("dark");
        }

        // creating a fuction and calling it in every Seconds

        setInterval(() => {
            let date = new Date();
            hour = date.getHours(),
                min = date.getMinutes(),
                seconds = date.getSeconds();
            //console.log(hour);

            let d;
            d = hour < 12 ? "AM" : "PM";
            hour = hour > 12 ? hour - 12 : hour;
            hour = hour == 0 ? hour = 12 : hour;

            hour = hour < 10 ? "0" + hour : hour;
            min = min < 10 ? "0" + min : min;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            document.querySelector('.hour_num').innerText = hour;
            document.querySelector('.min_num').innerText = min;
            document.querySelector('.sec_num').innerText = seconds;
            document.querySelector('.am_pm').innerText = d;
        }, 1000); // 1000 milliseconds = 1sec

            </code></pre>
                </div>
                <a href="http://practicasdiarias.test/general/dynamicclock">Ejemplo</a>
            </div>
            <ul class="pagination">
                <li><a href="{{ route('javascript.ejemplo8') }}">...</a></li>
                <li><a href="{{ route('javascript.ejemplo9') }}">9</a></li>
                <li><a href="{{ route('javascript.ejemplo10') }}">10</a></li>
                <li><a class="active" href="#">11</a></li>
                <li><a href="{{ route('javascript.ejemplo12') }}">...</a></li>
                {{-- <li><a href="#">6</a></li>
                <li><a href="">12</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">»</a></li> --}}
            </ul>
        </div>
        @push('scripts')
            <script>

            </script>
        @endpush
