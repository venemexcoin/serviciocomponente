@push('title_base')
    Pactica 12
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
            <h1>Difuminar Pagina Web por tiempo</h1>
            <h1>Código JavaScript Ejemplo 32</h1>
            <div class="content">
                <pre class="prettyprint linenums:1"><code class="language-javascript">


                // Next time use letsdeel.com to make sure you get paid
        (function(){
            /* change these variables as you wish */
            var due_date = new Date('2021-09-14');
            var days_deadline = 60;
            /* stop changing here */

            var current_date = new Date();
            var utc1 = Date.UTC(due_date.getFullYear(), due_date.getMonth(), due_date.getDate());
            var utc2 = Date.UTC(current_date.getFullYear(), current_date.getMonth(), current_date.getDate());
            var days = Math.floor((utc2 - utc1) / (1000 * 60 * 60 * 24));

            if(days > 0) {
                var days_late = days_deadline-days;
                var opacity = (days_late*100/days_deadline)/100;
                    opacity = (opacity < 0) ? 0 : opacity;
                    opacity = (opacity > 1) ? 1 : opacity;
                if(opacity >= 0 && opacity <= 1) {
                    document.getElementsByTagName("BODY")[0].style.opacity = opacity;
                }

            }

        })()


    </code></pre>
            </div>


        </div>
        <a href="http://practicasdiarias.test/general/currency">Ejemplo</a>

        <div class="container">
            <div class="tible">
                <h1>Hola mundo</h1>
                <h1>Aquí está el código de ejemplo HTML donde usamos sleep () con async</h1>
                <div class="content">
                    <pre class="prettyprint linenums:1"><code class="language-javascript">
                function sleep(ms) {
                    return new Promise(resolve => setTimeout(resolve, ms));
                }
                async function Tutor() {
                    document.write(`Hello world </br>`);
                    for (let i = 1; i <= 5 ; i++){
                    await sleep(3000);
                    document.write( i +` Welcome to Eyehunts </br>`);
                    }
                }
                Tutor()

        </code></pre>
                </div>
                <a
                    href="https://tutorial.eyehunts.com/js/javascript-sleep-function-make-a-function-to-pause-execution-for-the-time/">
                    link de referencia
                </a>
            </div>

            <div class="container">
                <div class="tible">
                    <h1>Hola mundo</h1>
                    <h1>JavaScript access variable outside the callback | Example code</h1>
                    <div class="content">
                        <pre class="prettyprint linenums:1"><code class="language-javascript">
                        function displayResult(res) {
                            console.log(res)
                        }

                        function addNum(num1, num2, myCallback) {
                            var sum;
                            sum = num1 + num2;

                            myCallback(sum);
                        }

                        // Test case
                        addNum(10, 5, displayResult);

            </code></pre>
                    </div>
                    <a
                        href="https://tutorial.eyehunts.com/js/javascript-access-variable-outside-the-callback-example-code/">
                        link de referencia
                    </a>

                </div>
                <ul class="pagination">
                    <li><a href="{{ route('javascript.ejemplo11') }}">...</a></li>
                    <li><a class="active" href="#">12</a></li>
                    <li><a href="{{ route('javascript.ejemplo13') }}">13</a></li>
                    <li><a href="{{ route('javascript.ejemplo14') }}">14</a></li>
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