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
        <h1>Código JavaScript Ejemplo 26</h1>
        <div class="content">
            <pre class="prettyprint linenums:1"><code class="language-javascript">
                const form = document.getElementById('form')
                const input = document.getElementById('input')
                const button = document.getElementById('button')

                 input.addEventListener('keyup', (e) => {
                    console.log(e);
                })

                 button.addEventListener('click', (e)=> {
                    console.log(e.target)
                })

                 const gallery = document.getElementById('gallery')
                gallery.addEventListener('click', (e) => {
                    e.target.classList.add('red')
                })

                 const link = document.getElementById('link')

                 link.addEventListener('click', (e) => {
                     e.preventDefault()

                 })

                 form.addEventListener('submit', (e) => {
                     e.preventDefault()
                     console.log('El formulario se ha enviado');
                 })

                 button.addEventListener('click', () => {
                     input.value = 'Has hecho click'
                 })

                 button.click()
    </code></pre>
        </div>

    </div>

    <div class="container">
        <div class="tible">
            <h1>Hola mundo</h1>
            <h1>Código JavaScript Ejemplo 27</h1>
            <div class="content">
                <pre class="prettyprint linenums:1"><code class="language-javascript">
                    DOM - Crear e insertar elementos


                Crear un elemento: document.createElement(element)
                Escribir texto en un elemento: element.textContent = texto
                Escribir HTML en un elemento: element.innerHTML = código HTML
                Añadir un elemento al DOM: parent.appendChild(element)
                Fragmentos de código: document.createDocumentFragment()


                const days = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo', 'otro mas']

                const title = document.getElementById('title')
                const daysList = document.getElementById('daysList')
                const selectDays = document.getElementById('daysSelect')

                 const itemList = document.createElement('lI')

                 itemList.textContent = 'Lunes'

                 daysList.appendChild(itemList)

                title.innerHTML = 'DOM - <span>Crear e insertar elementos I</span>'

                const fragment = document.createDocumentFragment()

                 for (const day of days) {
                     const itemList = document.createElement('lI')
                     itemList.textContent = day
                     fragment.appendChild(itemList)
                 }

                for (const day of days) {
                    const selectItem = document.createElement('OPTION')
                    selectItem.setAttribute('value', day.toUpperCase());
                    selectItem.textContent = day
                    fragment.appendChild(selectItem)
                }

                 daysList.appendChild(fragment);

                selectDays.appendChild(fragment);

        </code></pre>
            </div>

        </div>

        <div class="container">
            <div class="tible">
                <h1>Hola mundo</h1>
                <h1>Código JavaScript Ejemplo 28</h1>
                <div class="content">
                    <pre class="prettyprint linenums:1"><code class="language-javascript">
                        //Recorrer el DOM (DOM Traversing)


                    Padre - parent (Nodo del que desciende)
                        - parentNode - Devuelve el nodo padre (que puede no ser un elemento)
                        - parentElement - Devuelve el nodo elemento padre
                        NOTA
                        Los nodos del tipo Document y DocumentFragment nunca van a tener un elemento padre, parentNode y parentElement devolverá siempre null.
                    Hijos - child (Nodo que desciende de un padre)
                        - childNodes - Devuelve todos los nodos hijos
                        - children - Devuelve todos los nodos elementos hijos
                        - firstChild - Devueleve el primer nodo hijo
                        - firstElementChild - Devueleve el primer nodo elemento hijo
                        - lastChild - Devueleve el último nodo hijo
                        - lastElementChild - Devueleve el último nodo elemento hijo
                        - hasChildNodes() - Devueleve true si el nodo tiene hijos y false si no tiene
                    Hermanos - siblings (Nodo al mismo nivel)
                        - nextSibling - Devuelve el siguiente nodo hermano
                        - nextElementSibling - Devuelve el siguiente nodo elemento hermano
                        - previousSibling - Devuelve el anterior nodo hermano
                        - previousElementSibling - Devuelve el anterior nodo elemento hermano
                    Cercano
                        - closest(selector) - Selecciona el nodo más cercano que cumpla      con el selector, aún es experimental.


                    const parent = document.getElementById('parent')

                    console.log(parent.parentNode);
                     console.log(parent.parentElement.parentElement.parentElement);

                     console.log(parent.childNodes);
                     console.log(parent.children[0]);
                     console.log(parent.firstChild);
                     console.log(parent.firstElementChild);
                     console.log(parent.lastChild);
                     console.log(parent.lastElementChild);

                     console.log(parent.firstChild.hasChildNodes())

                     console.log(parent.nextElementSibling)
                     console.log(parent.parentElement.nextElementSibling)

                    console.log(parent.parentElement.previousSibling)
                    console.log(parent.parentElement.previousElementSibling)

            </code></pre>
                </div>

            </div>
            <ul class="pagination">
                <li><a href="{{ route('javascript.ejemplo8') }}">...</a></li>
                <li><a class="active" href="#">9</a></li>
                <li><a href="{{ route('javascript.ejemplo10') }}">10</a></li>
                <li><a href="{{ route('javascript.ejemplo11') }}">11</a></li>
                <li><a href="{{ route('javascript.ejemplo11') }}">...</a></li>
                {{-- <li><a href="#">12</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">»</a></li> --}}
            </ul>
        </div>
        @push('scripts')
            <script>

            </script>
        @endpush
