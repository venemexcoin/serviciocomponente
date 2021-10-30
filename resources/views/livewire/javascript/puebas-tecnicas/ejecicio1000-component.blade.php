@push('title_base')
    Prueba Tecnica
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
                <h1>Definir una función para ordenat un array</h1>
                <h1>de cadenas acorde al ultimo carácter</h1>
                <div class="content">
                    <pre class="prettyprint linenums:1"><code class="language-javascript">
                        function ordenarCadenasSegunUltimoCaracter(cadenas) {
                            if (!Array.isArray(cadenas)) {
                                throw TypeError('El argumento debe ser un arreglo.');
                            }

                            if (!cadenas.every(e => typeof e === 'string')) {
                                throw TypeError('Todos los elementos del arreglo deben ser cadenas de caracteres.');
                            }

                            return cadenas.sort((x, y) => x.charCodeAt(x.length - 1) - y.charCodeAt(y.length - 1));
                        }

                        let lenguajes = ['Python', 'JavaScript', 'C#', 'Go', 'PHP', 'Java']

                        try {
                            let resultado = ordenarCadenasSegunUltimoCaracter(lenguajes);

                            // n, t, #, o, P, a
                            // #, P, a, n, o, t

                            console.log(resultado); // ['C#', 'PHP', 'Java', 'Python', 'Go', 'JavaScript']
                        } catch (e) {
                            console.log(`Error: ${e.message}`);
                        }

                        console.log();

                        try {
                            let resultado = ordenarCadenasSegunUltimoCaracter(42);  // Error
                        } catch (e) {
                            console.log(`Error: ${e.message}`);
                        }


            </code></pre>
                </div>
                <div class="content">
                    <p>Acer Confirmación del código Por consola</p>
                </div>
            </div>

        </div>

        <div class="container">
            <div class="tible">
                <h1>Definir una función implementar el</h1>
                <h1>algoritmo de ordenamiento merge-sort.</h1>
                <div class="content">
                    <pre class="prettyprint linenums:1"><code class="language-javascript">
                        Array.prototype.mergeSort = function() {
                            if (this.length <= 1) {
                                return this;
                            }

                            let mitad = parseInt(this.length / 2);
                            let izquierda = this.slice(0, mitad).mergeSort();
                            let derecha = this.slice(mitad, this.length).mergeSort();

                            let merge = function(izquierda, derecha) {
                                let datos = [];

                                while(izquierda.length > 0 && derecha.length > 0) {
                                    datos.push(izquierda[0] <= derecha[0] ? izquierda.shift() : derecha.shift())
                                }

                                return datos.concat(izquierda).concat(derecha);
                            }

                            return merge(izquierda, derecha);
                        }

                        let numeros = [11, 7, 19, 3, 23, 2, 5, 29, 23];
                        console.log(numeros);
                        numeros.mergeSort();

                        console.log();

                        let resultado = numeros.mergeSort();
                        console.log(resultado);


                        /*
                        Array(9) [ 11, 7, 19, 3, 23, 2, 5, 29, 23 ]

                        Array(9) [ 11, 7, 19, 3, 23, 2, 5, 29, 23 ]


                        Array(9) [ 2, 3, 5, 7, 11, 19, 23, 23, 29 ]

                        */
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
                        &lt;!DOCTYPE html&gt;
                        &lt;html lang="en"&gt;
                        &lt;head&gt;
                            &lt;title&gt;Document&lt;/title&gt;
                        &lt;/head&gt;
                        &lt;body&gt;

                        &lt;p id="resultado"&gt;&lt;/p&gt;

                        &lt;/body&gt;
                        &lt;/html&gt;


                        function capturarEntero() {
                            do {
                                let numero = window.prompt('Digite un número:', '0');

                                if (!Number.isNaN(Number(numero))) {
                                    return parseInt(numero);
                                }
                            } while (true);
                        }

                        window.onload = function() {
                            let numero1 = capturarEntero();
                            let numero2 = capturarEntero();

                            let suma = numero1 + numero2;

                            document.getElementById('resultado').innerText = suma;
                        }
            </code></pre>
                </div>
                <div class="content">
                    <p>Suma de Dos Numeros</p>
                    <a href="{{ route('javascript.ejercicio1002') }}">Ejemplo</a>
                </div>

            </div>
            <ul class="pagination">
                {{-- <li><a href="{{ route('javascript.ejemplo14') }}">...</a></li> --}}
                <li><a class="active" href="#">1</a></li>
                <li><a href="{{ route('javascript.ejercicio2') }}">2</a></li>
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
