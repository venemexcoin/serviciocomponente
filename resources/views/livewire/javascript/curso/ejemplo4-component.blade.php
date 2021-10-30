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
            <h1>Hola mundo</h1>
            <h1>Código JavaScript Ejemplo 11</h1>
            <div class="content">
                <pre class="prettyprint linenums:1"><code class="language-javascript">

                let numbers = [1, 2, 3, 4, 5];


                Arrays - Propiedad
                    .length - devuelve el número de posiciones que  contiene el array


            console.log(numbers.length);


                Array ¿ M'etodos
                Array.isArray(variable a evaluar) - Devuelve true si la variable es un Array.


            let number = 4;

            console.log(Array.isArray(number));
            console.log(Array.isArray(numbers));



                Elimina un elemento
                .shift() - Elimina el primer elemanto del array y devuelve ese elemento
                .pop() - Elimina el último elemento de un array y devuelve ese elemento


            console.log(numbers);
            numbers.shift();
            console.log(numbers);

            console.log(numbers);
            let deleteElemnet = numbers.pop();
            console.log(numbers);
            console.log(deleteElemnet);


                Añader elementos
                .push(element1, element2,...) - añade una más elementos al final del Array
                y devuelve la nueva logitud.
                .unshift(element1, element2,...) - añade uno o más elementos al comienzo del
                array y devuelve la nueva longitud.


            let newLength = numbers.push(6);
            console.log(numbers);
            console.log(newLength);
            let newLength2 = numbers.unshift(6);
            console.log(numbers);


                indexOf() - Devuelve el último índice del elemento que coincida
                con el valor especificado, o -1 si ninguno es encontrado.


            console.log(numbers);
            console.log(numbers.indexOf(2));



                .lastIndexOf() - Debuelve el último índice del elemento que coincida
                con el valor especificado, 0 -1 sin ninguno es encontrado.

            console.log(numbers);
            console.log(numbers.lastIndexOf(6));

                .reverse() - Invierte el orden de los elementos del array


            console.log(numbers);
            numbers.reverse();
            console.log(numbers);


                .join(separador) - Devuelve un string con el separador que indiquemos,
                por defecto son comas


            console.log(numbers);
            let arrayString = numbers.join(' ')
            console.log(arrayString);
            console.log(numbers.join('-'));


                .splice(a,b,items) - Cambia el contenido de un array eliminando
                elementos existentes y/o agregando nuevos elementos.
                    a - Indice del inicio
                    b - Número del elementos  (opcional)
                    items - Elementos a añadir en el caso de que se añadan. (opcional).


            console.log(numbers);
            numbers.splice(2);  //Elimina desde la posicion 3 hasta el final
            numbers.splice(2, 2); //Elimina desde la posicion 2  hasta el numero inficado
            numbers.splice(2, 2, 10, 23, 54);
            numbers.splice(2, 0, 10, 23, 54);
            console.log(numbers);



            .slice(a,b) - Extrae elementos de un array desde el índice a hasta el
            índice b. Si no existe b lo hace desde a hasta el final, si no existe
            ni a ni b hasta una copia del original.


            let newNumbers = numbers.slice();
            console.log(numbers);
            console.log(newNumbers);

            let newNumbers = numbers.slice(2);
            console.log(numbers);
            console.log(newNumbers);

            let newNumbers = numbers.slice(2, 4);
            console.log(numbers);
            console.log(newNumbers);
    </code></pre>
            </div>

        </div>

        <div class="container">
            <div class="tible">
                <h1>Hola mundo</h1>
                <h1>Código JavaScript Ejemplo 12</h1>
                <div class="content">
                    <pre class="prettyprint linenums:1"><code class="language-javascript">
                    let pass = '';

                while (pass != 'hola') {
                    pass = prompt(`Introdusca su contraseña`)
                }

                console.log('Fin del bucle');

                do {
                    pass = prompt(`Introdusca su contraseña`)
                } while (pass != 'hola');
        </code></pre>
                </div>

            </div>

            <div class="container">
                <div class="tible">
                    <h1>Hola mundo</h1>
                    <h1>Código JavaScript Ejemplo 13</h1>
                    <div class="content">
                        <pre class="prettyprint linenums:1"><code class="language-javascript">
             for (let i = 0; i <= 10; i++) {
                     console.log(i);
                 }

                 for (let i = 10; i >= 0; i--) {
                     if (i == 5) {
                         console.log(i);
                     }
                 }

                 for (let i = 10; i >= 0; i--) {
                     if (i != 5) {
                         console.log(i);
                     }
                 }

                            let numbers = [56, 14, 23, 37, 41, 59]

                 for (let i = 0; i < numbers.length; i++) {
                     console.log(numbers[i]);
                 }

                            for (let i = 0; i < numbers.length; i++) {
                                console.log(`i vale ${i} y el valor de esa posicion en el array es ${numbers[i]}`);

            </code></pre>
                    </div>

                </div>
                <ul class="pagination">
                    <li><a href="{{ route('javascript.ejemplo1') }}">...</a></li>
                    <li><a href="{{ route('javascript.ejemplo1') }}">1</a></li>
                    <li><a href="{{ route('javascript.ejemplo2') }}">2</a></li>
                    <li><a href="{{ route('javascript.ejemplo3') }}">3</a></li>
                    <li><a class="active" href="#">4</a></li>
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

                    PI = 3.1416 error de constante no se puede modificar
                </script>
            @endpush
