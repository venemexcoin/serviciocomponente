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

    </style>
@endpush

<div class="container">
    <div class="tible">
        <h1>Hola mundo</h1>
        <h1>Código JavaScript Ejemplo 32</h1>
        <div class="content">
            <pre class="prettyprint linenums:1"><code class="language-javascript">


    </code></pre>
        </div>

    </div>

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

            </div>
            <ul class="pagination">
                <li><a href="{{ route('javascript.ejemplo8') }}">...</a></li>
                <li><a href="{{ route('javascript.ejemplo9') }}">9</a></li>
                <li><a href="{{ route('javascript.ejemplo10') }}">10</a></li>
                <li><a class="active" href="#">11</a></li>
                {{-- <li><a href="#">12</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">»</a></li> --}}
            </ul>
        </div>
        @push('scripts')
            <script>

            </script>
        @endpush
