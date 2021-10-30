@push('title_base')
    Pactica 15
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

        .mb {
            margin-bottom: 30px;
        }

    </style>
@endpush
<div>
    <div class="container mb">
        @livewire('crumbs.nav-bar-component')
    </div>
    <div>
        <div class="container mb">
            @livewire('crumbs.nav-bar-component')
        </div>

        <div class="container">
            <div class="tible">
                <h1>Difuminar Pagina Web por tiempo</h1>
                <h1>Código JavaScript Ejemplo 33</h1>
                <div class="content">
                    <pre class="prettyprint linenums:1"><code class="language-javascript">




    </code></pre>
                </div>
                <a href="http://practicasdiarias.test/general/currency">Ejemplo</a>
            </div>

        </div>

        <div class="container">
            <div class="tible">
                <h1>Hola mundo</h1>
                <h1>Aquí está el código de ejemplo HTML donde usamos sleep () con async</h1>
                <div class="content">
                    <pre class="prettyprint linenums:1"><code class="language-javascript">


        </code></pre>
                </div>
                <a
                    href="https://tutorial.eyehunts.com/js/javascript-sleep-function-make-a-function-to-pause-execution-for-the-time/">
                    link de referencia
                </a>
            </div>
        </div>

        <div class="container">
            <div class="tible">
                <h1>Hola mundo</h1>
                <h1>JavaScript access variable outside the callback | Example code</h1>
                <div class="content">
                    <pre class="prettyprint linenums:1"><code class="language-javascript">


            </code></pre>
                </div>
                <a
                    href="https://tutorial.eyehunts.com/js/javascript-access-variable-outside-the-callback-example-code/">
                    link de referencia
                </a>

            </div>
            <ul class="pagination">
                <li><a href="{{ route('javascript.ejemplo14') }}">...</a></li>
                <li><a class="active" href="#">15</a></li>
                {{-- <li><a href="#">14</a></li>
                <li><a href="#">15</a></li>
                <li><a href="#">...</a></li> --}}
                {{-- <li><a href="#">12</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">»</a></li> --}}
            </ul>
        </div>
    </div>
    @push('scripts')
        <script>

        </script>
    @endpush
