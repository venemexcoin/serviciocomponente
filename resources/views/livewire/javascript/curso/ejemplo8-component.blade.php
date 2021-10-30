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
        <h1>Código JavaScript Ejemplo 23</h1>
        <div class="content">
            <pre class="prettyprint linenums:1"><code class="language-javascript">

            document.getElementById('id') - Acceder a un elemento a través de su id

            document | element .querySelector('selectorCSS') - Accede al primer elemento que coincida con el selector CSS

            document | element .querySelectorAll('selectorCSS') - Accede a todos los elementos que coincidan con el selector CSS, devuelve un nodeList

             const title = document.getElementById('title');

             console.log(title);

             title.textContent = 'DOM - Accediendo a nodos'

             const paragraph = document.querySelector('.paragraph:nth-child(2)');

             console.log(paragraph);

             const paragraph = document.querySelector('.paragraph')

             const span = paragraph.querySelector("span")

             const span = document.getElementById('title').querySelector("span")

            const paragraphs = document.querySelectorAll(".paragraph")
             const paragraphsSpread = [...document.querySelectorAll(".paragraph")]
            const paragraphsArray = Array.from(document.querySelectorAll(".paragraph"))



            paragraphs[0].style.color = 'red'

             paragraphs.map(p => p.style.color = 'green')
             paragraphsSpread.map(p => p.style.color = 'green')
            paragraphsArray.map(p => p.style.color = 'blue')

            console.log(paragraphs)

    </code></pre>
        </div>

    </div>

    <div class="container">
        <div class="tible">
            <h1>Hola mundo</h1>
            <h1>Código JavaScript Ejemplo 24</h1>
            <div class="content">
                <pre class="prettyprint linenums:1"><code class="language-javascript">

                Atributos
                    element.getAttribute('attribute')
                    element.setAttribute('attribute', value)
                Clases
                    element.classList.add('class','class',...)
                    element.classList.remove('class','class',...)
                    element.classList.contains('class')
                    element.classList.replace('oldClass', newClass)

                    element.classList.toggle('class'[,force])
                atributos directos
                    id
                    value


                const title = document.getElementById('title')
                const name = document.getElementById('name')



                 console.log(name.getAttribute('type'))

                 name.setAttribute('type', 'number');
                 name.setAttribute('type', 'radio');
                 name.setAttribute('type', 'date');

                 title.classList.add('main-title')
                 title.classList.remove('title')

                 if (title.classList.contains('title')) console.log('Title tiene la class title')
                 else console.log('Title no tiene la class title')

                 title.classList.replace('title', 'main-title')


                 console.log(title.id)
                 console.log(title.innerHTML)
                 console.log(title.textContent)

                console.log(name.value)


                 console.log(title)
                 console.log(name)
        </code></pre>
            </div>

        </div>

        <div class="container">
            <div class="tible">
                <h1>Hola mundo</h1>
                <h1>Código JavaScript Ejemplo 25</h1>
                <div class="content">
                    <pre class="prettyprint linenums:1"><code class="language-javascript">

                    Eventos de ratón:
                        click - cuando pulsamos el botón izquierdo del ratón
                        dblclick - cuando pulsamos dos veces seguidas el botón izquierdo del ratón
                        mouseenter - cuando entramos en la zona que tiene el evento
                        mouseleave - cuando salimos de la zona que tiene el evento
                        mousedown - cuando pulsamos el boton izquierdo del ratón
                        mouseup - cuando soltamos el boton izquierdo del ratón
                        mousemove - cuando movemos el ratón
                    Eventos de teclado:
                        keydown - cuando pulsamos una tecla
                        keyup - cuando soltamos una tecla
                        keypress - cuando pulsamos una tecla y no la soltamos


                    const button = document.getElementById('button')
                    const input = document.getElementById('input')
                    const box = document.getElementById('box')

                     button.addEventListener('click', () => {
                         console.log('CLICK');
                     });

                     button.addEventListener('dblclick', () => {
                         console.log('dblclick');
                     });

                     box.addEventListener('mouseenter', () => {
                         box.classList.replace('red', 'green')
                     });

                     box.addEventListener('mouseleave', () => {
                         box.classList.replace('green', 'red')

                     });

                     button.addEventListener('mouseenter', () => {
                         button.classList.replace('green', 'red')
                     });

                     button.addEventListener('mouseleave', () => {
                         button.classList.replace('red', 'green')

                     });

                     box.addEventListener('mousedown', () => {
                         console.log('Has Pulsado en la caja')
                     });

                     box.addEventListener('mouseup', () => {
                         console.log('Has soltado el Boton izquierdo en la caja')
                     });

                     box.addEventListener('mousemove', () => {
                         console.log('Estas Moviendo el raton');
                     });

                     input.addEventListener('keydown', () => {
                         console.log('Has pulsado una tecla');
                     })

                     input.addEventListener('keyup', () => {
                         console.log('Has soltado una tecla');
                     })

                     input.addEventListener('keypress', () => {
                         console.log('Estas precionando una tecla');
                     })
            </code></pre>
                </div>

            </div>
            <ul class="pagination">
                <li><a href="{{ route('javascript.ejemplo4') }}">...</a></li>
                <li><a href="{{ route('javascript.ejemplo5') }}">5</a></li>
                <li><a href="{{ route('javascript.ejemplo6') }}">6</a></li>
                <li><a href="{{ route('javascript.ejemplo7') }}">7</a></li>
                <li><a class="active" href="#">8</a></li>
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
