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
        <h1>Código JavaScript Ejemplo 7</h1>
        <div class="content">
            <pre class="prettyprint linenums:1"><code class="language-javascript">

            Sintaxiis simple:
            switch(evaluación){
                case n:
                codico
                break;
                case n2:
                braak

                default:
                codigo
            }


            Sintaxis Múltiple:
            switch(evaluación){
                case n:
                case n2:
                case n3:
                    código
                    break;
                case n5:
            }


            let num = 3;

            switch (num) {
                case 1:
                    console.log(`${num} tiene el valor 1 `);
                    break;
                case 2:
                    console.log(`${num} tiene el valor 2 `);
                    break;
                default:
                case 3:
                    console.log(`${num} no vale ni 1 ni 2 `);
                    break;
            }

            switch (num) {
                case 1:
                case 3:
                case 5:
                    console.log(`${num} es impares `);
                    break;
                case 2:
                case 4:
                    console.log(`${num} es pares `);
                    break;
                default:
            }

            Sintaxis multiple encadenada
    </code></pre>
        </div>

    </div>

    <div class="container">
        <div class="tible">
            <h1>Hola mundo</h1>
            <h1>Código JavaScript Ejemplo 8</h1>
            <div class="content">
                <pre class="prettyprint linenums:1"><code class="language-javascript">
                    let num = 3;

                (num % 2 == 0) ? console.log(`${num} es par`): console.log(`${num} es imopar`);

                (num % 2 == 0) ?
                (
                    console.log(`${num} es par`),
                    console.log(`${num} es par 2`)
                ) :
                (
                    console.log(`${num} es impar`),
                    console.log(`${num} es impar 2`));
        </code></pre>
            </div>

        </div>

        <div class="container">
            <div class="tible">
                <h1>Hola mundo</h1>
                <h1>Código JavaScript Ejemplo 10</h1>
                <div class="content">
                    <pre class="prettyprint linenums:1"><code class="language-javascript">
                        let numeros = [1, 2, 3, 4, 5];

                let palabras = ['Hola', 'estamos', 'en', 'youtube'];

                let booleans = [false, true, false];

                console.log(numeros.length);

                console.log(numeros[3]);

                console.log(numeros[2] + numeros[4]);

                console.log(numeros);

                console.log(palabras);

                console.log(`la palabra "${palabras[3]}" tiene ${palabras[3].length} letras`);

            </code></pre>
                </div>

            </div>
            <ul class="pagination">
                <li><a href="{{ route('javascript.ejemplo1') }}">...</a></li>
                <li><a href="{{ route('javascript.ejemplo1') }}">1</a></li>
                <li><a href="{{ route('javascript.ejemplo2') }}">2</a></li>
                <li><a class="active" href="#">3</a></li>
                <li><a href="{{ route('javascript.ejemplo4') }}">4</a></li>
                <li><a href="{{ route('javascript.ejemplo5') }}">..</a></li>
                {{-- <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">»</a></li> --}}
            </ul>
        </div>
        @push('scripts')
            <script>
                let base = 5;

                let palabra = 'Hola Mundo';
                let respuesta = true;
                const PI = 3.14;

                numero = 54;

                PI = 3.1416 error de constante no se puede modificar
            </script>
        @endpush
