@push('title_base')
    Prueba Tecnica 3
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

        .content p {
            position: relative;
            left: 25px;
            font-size: 18px;
        }

        .content a {
            position: relative;
            left: 25px;
            font-size: 18px;
            text-decoration: none;
            color: rgb(114, 114, 114);
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
                <h1>Ordenar tres numeros de forma ascendente </h1>
                <h1>si usar condicional ni ciclos</h1>
                <div class="content">
                    <pre class="prettyprint linenums:1"><code class="language-javascript">
                        let a = 3;
                        let b = 2;
                        let c = 1;

                        let x = Math.min(a,b,c);
                        let y = Math.max(a,b,c);
                        let z = (a + b + c) - x - y;

               /* Respueta
               x = 1
               y = 3
               z = (6) - 1 - 3
               z = 2
               */

               console.log(x,5,y);

    </code></pre>
                </div>
                <div class="content">
                    <p>Acer Confirmación del código Por consola</p>
                </div>
            </div>

        </div>

        <div class="container">
            <div class="tible">
                <h1>Algoritmo de ordenación de JavaScript para código de matriz</h1>
                <h1>Algoritmo de clasificación de burbujas para la implementación de clasificación de matrices de
                    JavaScript.</h1>
                <div class="content">
                    <pre class="prettyprint linenums:1"><code class="language-javascript">
                        function bubbleSort(arr){
                            var len = arr.length;
                            for (var i = len-1; i>=0; i--){
                                for(var j = 1; j<=i; j++){
                                    if(arr[j-1]>arr[j]){
                                        var temp = arr[j-1];
                                        arr[j-1] = arr[j];
                                        arr[j] = temp;
                                    }
                                }
                            }
                            return arr;
                        }
                        console.log(bubbleSort([7,5,2,4,3,9,0]));
                        console.log(bubbleSort([9,7,5,4,3,1]));
                        console.log(bubbleSort([1,2,3,4,5,6]));
            </code></pre>
                </div>
                <div class="content">
                    <p>Acer Confirmación del código Por consola</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="tible">
                <h1>Capturar Dos numeros con la</h1>
                <h1>Función prompt() y Luego sumarla</h1>
                <div class="content">
                    <pre class="prettyprint linenums:1"><code class="language-javascript">

    </code></pre>
                </div>
                <div class="content">
                    <p>Suma de Dos Numeros</p>
                    <a href="{{ route('javascript.ejercicio1002') }}">Ejemplo</a>
                </div>

            </div>
            <ul class="pagination">
                {{-- <li><a href="{{ route('javascript.ejemplo14') }}">...</a></li> --}}
                <li><a href="{{ route('javascript.ejercicio1') }}">1</a></li>
                <li><a class="active" href="#">2</a></li>
                <li><a href="#">3</a></li>
                {{-- <li><a href="#">...</a></li> --}}
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
