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
        <h1>Código JavaScript Ejemplo 1</h1>
        <div class="content">
            <pre class="prettyprint linenums:1"><code class="language-javascript">
    /* Ejecutar Funciones Automáticamente (Sin botones) [JS] */

    let numero = 5;

        let palabra = 'Hola Mundo';
        let respuesta = true;
        const PI = 3.14;

        numero = 54;


        console.log(numero);
        console.log(palabra);
        console.log(respuesta);
        console.log(PI);

        // PI = 3.1416 error de constante  no se puede modificar
    </code></pre>
        </div>
    </div>
</div>

<div class="container">
    <div class="tible">
        <h1>Hola mundo</h1>
        <h1>Código JavaScript Ejemplo 2</h1>
        <div class="content">
            <pre class="prettyprint linenums:1"><code class="language-javascript">
                let a = 5;
                let b = 2;
                let usuario = 'Eduardo';

                console.log(a + b);
                console.log(a - b);
                console.log(a * b);
                console.log(a / b);
                console.log(a % b);

                console.log(usuario + " " + a);

                console.log("Hola" + "      " + usuario);*/

                 let a = 5;

                console.log(a);
                console.log(a++);
                console.log(a);

                console.log(a);
                console.log(++a);

                console.log(a);
                console.log(--a);

                let a = 10;

                a = a + 3;
                a += 3;
                console.log(a);
                a -= 3;
                console.log(a);
                a *= 3;
                console.log(a);
                a /= 3;
                console.log(a);
                a %= 3;
                console.log(a);
    </code></pre>
        </div>
    </div>
</div>

<div class="container">
    <div class="tible">
        <h1>Hola mundo</h1>
        <h1>Código JavaScript Ejemplo 3</h1>
        <div class="content">
            <pre class="prettyprint linenums:1"><code class="language-javascript">
                let cadena = "Hola Mundo"
                PROPIEDADES
                length  -> Devuelve la logitud de la cadena

                console.log(cadena.length);

                 Métodos
                Todos los Método devuelven una cadena nueva, la cadena origina
                no  será modificado.
                ToUpperCase() -> Devuelve la cadena a mayusculas


                 let cadenaMayu = cadena.toUpperCase();

                  console.log(cadena.toUpperCase());
                 console.log(cadenaMayu);


                toLowerCase() -> Devuelve la cadena a minúsculas


                 console.log(cadena.toLowerCase());


                indexof(string) -> Devuelve la posicion en la que se encuentra el string, si no lo encuentra devuelve -1


                 console.log(cadena.indexOf('l'));


                replace(valor a buscar, valor nueva) -> Remplasa el fragmento de
                la cadena que le digamos y pone el valor nuevo


                 console.log(cadena.replace('Mundo', 'youtube'));


                substring(inicio[,fin]) -> Extrae los caracteres desde inicio
                    hasta  el fin (el final no se incluye)


                 console.log(cadena.substring(3, 10));


                slice(inicio [,fin]) -> igual que substring pero admite valores
                negativos, si ponemos valores negativos empezará desde atrás

                si no se incluye el final extrae hasta el final

                (2,-4) -> Empieza a contar el tercer caracter y los 4
                últimos no los considera


                 console.log(cadena.slice(-3));
                 console.log(cadena.slice(2));
                 console.log(cadena.slice(0, -6));


                trim() -> Elimina los espacios al inicio y al final de la cadena


                let cadena2 = '     Hola Youtube, Estamos trabajando con cadenas      ';

                 console.log(cadena2.trim());


                --ES6--

                startsWith (valor [,inicio]) -> Sirve para saber si la cadena
                termina con ese valor. Devuelve true o false


                 console.log(cadena.startsWith('H'));
                 console.log(cadena.startsWith('h'));

                 console.log(cadena.startsWith('M', 5));


                endsWith(valor[,longitud])-> Sirve para saber si la cadena
                termina con es valor. Devuelve True o false.


                 console.log(cadena.endsWith('o'));
                 console.log(cadena.endsWith('a', 4));
                 console.log(cadena.endsWith('Mundo'));


                includes(valor[,incio]) -> igual que indexOf pero devuelve true o false


                 console.log(cadena.includes('n'));
                 console.log(cadena.includes('a', 5));
                 console.log(cadena.includes('a', 2));


                repeat(valor) -> Repite el string el numero de valor que le
                indiquemos

                 let cadena3 = 'Hola';

                 console.log(cadena3.repeat(3));
                 console.log('r'.repeat(3));

                 Template Strings

                let nombre = 'Eduardo';
                let apellido = 'Liendo';
                let edad = 51;

                console.log('Hola ' + nombre + ' ' + apellido + ' . Tienes ' + edad + ' años');

                console.log(`Hola ${nombre} ${apellido}. Tienes ${edad} años. `);

                console.log(`Hola ${nombre} ${apellido}. el año que viene tendras  ${edad+1} años. `);
    </code></pre>
        </div>
    </div>


    <ul class="pagination">

        <li><a class="active" href="#">1</a></li>
        <li><a href="{{ route('javascript.ejemplo2') }}">2</a></li>
        <li><a href="{{ route('javascript.ejemplo3') }}">3</a></li>
        <li><a href="{{ route('javascript.ejemplo4') }}">4</a></li>
        <li><a href="{{ route('javascript.ejemplo5') }}">...</a></li>
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

        //PI = 3.1416 //error de constante no se puede modificar
    </script>
@endpush
