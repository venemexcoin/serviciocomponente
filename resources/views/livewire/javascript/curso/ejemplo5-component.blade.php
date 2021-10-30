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
        <h1>Código JavaScript Ejemplo 14</h1>
        <div class="content">
            <pre class="prettyprint linenums:1"><code class="language-javascript">
                let names = ['Paco', 'José', 'Paula', 'Maria']

             for (let name of names) {
                 console.log(name);
             }

             for (let name in names) {
                 console.log(name);
             }

             for (let name of names) {
                 console.log(name);
                 if (name == 'Paula') {
                     break;
                 }
             }

            for (let name of names) {

                if (names[name] === 'Paula') {
                    continue
                }
                console.log(name);
            }

    </code></pre>
        </div>

    </div>

    <div class="container">
        <div class="tible">
            <h1>Hola mundo</h1>
            <h1>Código JavaScript Ejemplo 15</h1>
            <div class="content">
                <pre class="prettyprint linenums:1"><code class="language-javascript">
            let name = prompt('Introduce tu nombre');

            let age = parseInt(prompt('Introduce tu edad'));

            console.log(`Hola ${name} tienes ${age} y el año que viene tendrás ${age + 1} años`)

            ejercicio 2

            let figure = prompt('Introduce la figura geómetrica de la que quieres calcular el área: triangle, rectangle or circle');

            let base;
            let height;
            let radius;

            switch (figure) {
                case 'triangle':
                    base = prompt('introdusce la base del triagulo')
                    height = prompt('introdusce la altura del triagulo')
                    console.log(`El área del triángulo es ${(base*height)/2}`);
                    break;

                case 'rectangle':
                    base = prompt('introdusce la base del rectángulo')
                    height = prompt('introdusce la altura del rectángulo')
                    console.log(`El área del triángulo es ${base*height}`);
                    break;

                case 'circle':
                    radius = prompt('introdusce el radio del círculo')
                    console.log(`El área del círculo es ${Math.PI * Math.pow(radius,2)}`);
                    break;
                default:
                    console.log('La figura geométrica no es válida');
            }

             Ejercicio 3

            let num = parseInt(prompt('Introduce un numero'))

            for (let i = 1; i <= num; i++) {
                if (i % 2 == 0) {
                    console.log(`${i} - es par`);
                } else {
                    console.log(`${i} - es impar`);
                }
            }

            Ejercicio 4

            let num = parseInt(prompt('Introduce un número'))
            let divisores = 0

            if (num === 1) console.log('El numero 1 no es valido')
            else {
                for (let i = 2; i < num; i++) {
                    if (num % i == 0) {
                        console.log(`${num} / ${i} = ${num/i} No es primo`)
                        divisores++
                        break;
                    }
                }
            }

            if (divisores == 0) console.log(`${num} es primario`)

             Ejercicio 5

            let num = parseInt(prompt('Introduce un número'))
            let result = 1

            for (let i = num; i > 1; i--) {
                result *= i
            }
            console.log(`El factorial de ${num} es ${result}`);
        </code></pre>
            </div>

        </div>

        <div class="container">
            <div class="tible">
                <h1>Hola mundo</h1>
                <h1>Código JavaScript Ejemplo 16</h1>
                <div class="content">
                    <pre class="prettyprint linenums:1"><code class="language-javascript">
                         Ejersicio 6

                 let suma = 0
                 let cont = 0


                 while (suma < 50) {
                     suma += parseInt(prompt('Introduce un número para añadir a la suma'))
                     cont++
                 }

                 console.log(`La suma total es de: ${suma}`)
                 console.log(`El total de números introducidos es: ${cont}`);



                Ejersicio 7

                 const numbers = [3, 43, 21, 20, 56]
                 let pares = []
                 let impares = []

                 for (const number of numbers) {
                     let random = Math.round(Math.random() * 10 + 1)
                     const result = (number * random)
                     console.log(`${number} X ${random} = ${result}`);
                     if (result % 2 == 0) {
                         pares.push(result)
                     } else {
                         impares.push(result)
                     }
                 }

                 console.log(`Los numeros pares son: ${pares}`);
                 console.log(`Los numeros impares son: ${impares}`);


                Ejersicio 8

                 const letras = [
                     'T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X',
                     'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'L', 'C', 'K', 'E', 'T'
                 ]

                 const dni = prompt('Introce tu DNI')

                 if (dni.length == 8 && parseInt(dni) > 0) {
                     console.log(`Tu DNI completo es ${dni}${letras[dni%23]}`)
                 }

                Ejersicio 9

                 const palabra = prompt('Introduce una palabra').toLowerCase()

                 let consonantes = 0
                 let vocales = 0

                 for (const letra of palabra) {
                     if (letra == 'a' || letra == 'e' || letra == 'i' || letra == 'o' || letra == 'u') vocales++
                     else consonantes++
                 }

            </code></pre>
                </div>

            </div>
            <ul class="pagination">
                <li><a href="{{ route('javascript.ejemplo4') }}">...</a></li>
                <li><a class="active" href="#">5</a></li>
                <li><a href="{{ route('javascript.ejemplo6') }}">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">8</a></li>
                <li><a href="{{ route('javascript.ejemplo9') }}">...</a></li>
                {{-- <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">»</a></li> --}}
            </ul>
        </div>
        @push('scripts')
            <script>

            </script>
        @endpush
