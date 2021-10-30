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
            <h1>Código JavaScript Ejemplo 17</h1>
            <div class="content">
                <pre class="prettyprint linenums:1"><code class="language-javascript">
                const person = {
                    name: 'Juan',
                    age: '26',
                    sons: ['Laura', 'Diego', 'Pepe', 'Rosa', 'Daniela']
                }

                 console.log(person.name);
                 console.log(person['name']);

                 for (const key in person) {
                     console.log(key);
                 }

                 for (const key in person) {
                     console.log(person[key]);
                 }

                 for (const son in person.sons) {
                     console.log(son);
                 }

                 for (const son of person.sons) {
                     console.log(son);
                 }

                console.log(`Hola ${person.name}. Tienes ${person.age} años y tus hijos se llaman ${person.sons.join(', ')}`);

    </code></pre>
            </div>

        </div>

        <div class="container">
            <div class="tible">
                <h1>Hola mundo</h1>
                <h1>Código JavaScript Ejemplo 18</h1>
                <div class="content">
                    <pre class="prettyprint linenums:1"><code class="language-javascript">
                     function saludar() {
                     console.log("Hola");
                 }


                 const saludar = () => console.log("Hola");

                 const saludarUsuario = (user) => console.log(`Hola ${user}`);

                 saludarUsuario('Pepe');

                 const suma = (num1, num2) => {
                     if (num1 == 2) {
                         return num1 + num2
                     }
                     return num1
                 }

                 console.log(suma(2, 3));

                        const suma = (num1, num2) => num1 + num2

                        let result = suma(3, 6);

                console.log(result);
        </code></pre>
                </div>

            </div>

            <div class="container">
                <div class="tible">
                    <h1>Hola mundo</h1>
                    <h1>Código JavaScript Ejemplo 19</h1>
                    <div class="content">
                        <pre class="prettyprint linenums:1"><code class="language-javascript">
                        class Persona {
                            constructor(nombre, apellido, edad) {
                                this.nombre = nombre
                                this.apellido = apellido
                                this.edad = edad

                                this.datos = `Me llamo ${nombre} ${apellido} y tengo ${edad} años`
                            }

                            saludar() {
                                return `Hola, me llamo ${this.nombre} y tengo ${this.edad} años.`
                            }
                        }

                        const eduardo = new Persona('Eduardo', 'Liendo', 51)
                        const marta = new Persona('Marta', 'Liendo', 21)

                        console.log(eduardo);
                        console.log(eduardo.saludar());
                        console.log(marta.saludar());

            </code></pre>
                    </div>

                </div>
                <ul class="pagination">
                    <li><a href="{{ route('javascript.ejemplo4') }}">...</a></li>
                    <li><a href="{{ route('javascript.ejemplo5') }}">5</a></li>
                    <li><a class="active" href="#">6</a></li>
                    <li><a href="{{ route('javascript.ejemplo7') }}">7</a></li>
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
