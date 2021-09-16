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

    </style>
@endpush

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
            <h1>Código JavaScript Ejemplo 33</h1>
            <div class="content">
                <pre class="prettyprint linenums:1"><code class="language-javascript">


        </code></pre>
            </div>

        </div>

        <div class="container">
            <div class="tible">
                <h1>Hola mundo</h1>
                <h1>Código JavaScript Ejemplo 34</h1>
                <div class="content">
                    <pre class="prettyprint linenums:1"><code class="language-javascript">


            </code></pre>
                </div>

            </div>
            <ul class="pagination">
                <li><a href="{{ route('javascript.ejemplo11') }}">...</a></li>
                <li><a class="active" href="#">12</a></li>
                <li><a href="#">13</a></li>
                <li><a href="#">14</a></li>
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

