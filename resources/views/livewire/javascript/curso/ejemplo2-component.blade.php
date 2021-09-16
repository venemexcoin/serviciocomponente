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
        <h1>Código JavaScript Ejemplo 4</h1>
        <div class="content">
            <pre class="prettyprint linenums:1"><code class="language-javascript">
                Objeto Math

                Objeto estático

                termos que usar su nombre para utilizarlo

                propiedades:
                    Math.e - Math.pi
                Métodos:
                    Math.abs(x) Devuelve el valor absoluro de X
                    Meth.ceil(x) Devuelve el entero más grande mayor o igual que un número.
                    Math.floor(x) Devuelve el entero más pequeño menor o igual que un número.
                    Math.pow(x,y) Devuelve la potencia de x elevado a y
                    Math.sqrt(X) Debuelve la raiz cuadrada de x
                    Math.random() Genera un número pseudoaleatorio entre 0 y 1
                    Math.round(x) Devuelve el valor de un número redondeado al entero más cercano.
                    Math.sign(x) Devuelve el signo de la x, que indica si x es positivo, negativo o cero


                console.log(Math.E);
                console.log(Math.PI);

                let num = 5.1;

                let max = 99.99999999;
                let min = 0.000999999;

                console.log(Math.abs(num));

                console.log(Math.ceil(num));

                console.log(Math.floor(num));

                console.log(Math.pow(3, 3));

                console.log(Math.random() * 100);

                console.log(Math.round(Math.random() * 100));

                console.log(Math.random() * (max - min) + min);

                console.log(Math.round(Math.random() * (max - min) + 5));

                console.log(Math.sign(-5));

                console.log(Math.sign(5));

                console.log(Math.sign(0));

                console.log(Math.sqrt(5));

                console.log(Math.sqrt(2));
    </code></pre>
        </div>

    </div>

    <div class="container">
        <div class="tible">
            <h1>Hola mundo</h1>
            <h1>Código JavaScript Ejemplo 5</h1>
            <div class="content">
                <pre class="prettyprint linenums:1"><code class="language-javascript">
                    let num1 = 0;
                    let num2 = 3;

                    if (num > 0) {
                        console.log(`${num} es mayor que 0`);
                        console.log(`${num} es mayor que 0`);
                    }


                    if (num > 0) {
                        console.log(`${num} es mayor que 0`);
                        console.log(`${num} es mayor que 0`);
                    } else {
                        console.log(`${num} es menor que 0`);
                    }


                    if (num > 0) {
                        console.log(`${num} es mayor que 0`);
                        console.log(`${num} es mayor que 0`);
                    } else if (num < 0) {
                        console.log(`${num} es menor que 0`);
                    } else {
                        console.log(`${num} es igial que 0`);
                    }

                     Operadores Logicos

                     && and
                     || 0

                    if (num1 > 0 && num2 > 0) {
                        console.log(`${num1} y ${num2} son mayores que 0`);
                    }


                    if (num1 > 0 || num2 > 0) {
                        console.log(`${num1} y ${num2} son mayores que 0`);
                    }

                    if (num1 > 0) {

                        if (num2 > 0) {
                            console.log(`${num1} y ${num2} son mayor que 0`);
                        } else if (num2 < 0) {
                            console.log(`${num1} es mayor que 0 y num2 no es menor que 0`);
                        } else {
                            console.log(`${num1} es mayor que 0 y num2 no es igual que 0`);
                        }
                    } else if (num1 < 0) {
                        if (num2 > 0) {
                            console.log(`${num1} no es mayor que 0 y ${num2} es mayor que 0`);
                        } else if (num2 < 0) {
                            console.log(`${num1} y ${num2} son menor que 0`);
                        } else {
                            console.log(`${num1} es menor que 0 y ${num2} no es igual que 0`);
                        }
                    } else {
                        if (num2 > 0) {
                            console.log(`${num1} es igual que 0 y ${num2} es mayor que 0`);
                        } else if (num2 < 0) {
                            console.log(`${num1} es igual que 0 y ${num2} es menor que 0`);
                        } else {
                            console.log(`${num1} y ${num2} son iguales a 0`);
                        }
                    }

                    let word = 'Hola';

                    if (word.length > 4) {
                        console.log(`${word} tienes más de 4 letras`);
                    } else if (word.length < 4) {
                        console.log(`${word} tienes menos de 4 letras`);
                    } else {
                        ;
                        console.log(`${word} tiene 4 letras`);
                    }

                    let respuesta = true;

                    if (respuesta == true) console.log(`respuesta  tiene el valor true`);
                    if (respuesta !== true) console.log(`respuesta  tiene el valor false`);
                    if (respuesta == false) console.log(`respuesta  tiene el valor false`);

                    if (respuesta) console.log(`respuesta  tiene el valor true`);
                    if (!respuesta) console.log(`respuesta  tiene el valor false`);
        </code></pre>
            </div>

        </div>

        <div class="container">
            <div class="tible">
                <h1>Hola mundo</h1>
                <h1>Código JavaScript Ejemplo 6</h1>
                <div class="content">
                    <pre class="prettyprint linenums:1"><code class="language-javascript">

                        Ordenar 3 números de mayor a menor
                        Permuta con 3 elementos
                        Posibilidades 3! = 3*2*1 = 6
                        abc - 321
                        acb - 312
                        bac - 231
                        bca - 132
                        cab - 213
                        cba - 123


                        const numbers = document.getElementById('numbers');
                        const result = document.getElementById('result');


                        let a = prompt('Introduzca el primer número');
                        let b = prompt('Intodusca el segundo número');
                        let c = prompt('Introduzca el tercer número');

                        numbers.textContent = `Los numeros introducidos son ${a}, ${b}, ${c}`

                         Ejercicio

                        if (a >= b && a >= c) {
                            if (b > c) {
                                result.textContent = `El orden es: ${a}, ${b}, ${c}`
                            } else {
                                result.textContent = `El orden es: ${a}, ${c}, ${b}`
                            }
                        } else {
                            if (b >= a && b >= c) {
                                if (a > c) {
                                    result.textContent = `El orden es: ${b}, ${a}, ${c}`
                                } else {
                                    result.textContent = `El orden es: ${b}, ${c}, ${a}`
                                }

                            } else {
                                if (c >= a && c >= b) {
                                    if (a > b) {
                                        result.textContent = `El orden es: ${c}, ${a}, ${b}`
                                    } else {
                                        result.textContent = `El orden es: ${c}, ${b}, ${a}`
                                    }
                                }
                            }
                        }
            </code></pre>
                </div>

            </div>
            <ul class="pagination">
                <li><a href="{{ route('javascript.ejemplo1') }}">...</a></li>
                <li><a href="{{ route('javascript.ejemplo1') }}">1</a></li>
                <li><a class="active" href="#">2</a></li>
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
