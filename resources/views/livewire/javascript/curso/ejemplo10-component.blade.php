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
        <h1>Código JavaScript Ejemplo 29</h1>
        <div class="content">
            <pre class="prettyprint linenums:1"><code class="language-javascript">

            Insertar y eliminar elementos II
                parent.insertBefore(newElement, referenceElement) - Insertar un elemento antes del elemento de referencia
                SOPORTE TOTAL
                parent.insertAdjacentElement(position, element)
                parent.insertAdjacentHTML(position, HTML)
                parent.insertAdjacentText(position, text)
                positions:
                    beforebegin - Antes de que empiece (hermano anterior)
                    afterbegin - después de que empiece (primer hijo)
                    beforeend - antes de que acabe (último hijo)
                    afterend - después de que acabe (hermano siguiente)
                parent.replaceChild(newChild, oldChild) - Reemplaza un hijo por otro

            const list = document.getElementById('list')
            const newElement = document.createElement('li')
            newElement.textContent = "I'm a new element"

            list.insertBefore(newElement, list.children[1])

            list.children[0].insertAdjacentElement('beforebegin', newElement)
            list.insertAdjacentElement('afterbegin', newElement)
            list.insertAdjacentElement('beforeend', newElement)
            list.children[0].insertAdjacentElement('afterend', newElement)

            list.children[1].insertAdjacentHTML('afterend',
             '<li>Jodete con html</li>')
            list.children[1].insertAdjacentText('afterend',
             'Jodete con html')

            list.replaceChild(newElement, list.children[1])


                DOM manipulation convenience methods - JQuery Like
                https://caniuse.com/#search=jQuery-like
                positions:
                    parent.before() - Antes de que empiece (hermano anterior)
                    parent.prepend() - después de que empiece (primer hijo)
                    parent.append() - antes de que acabe (último hijo)
                    parent.after() - después de que acabe (hermano siguiente)
                    child.replaceWith(newChild)


            list.children[0].before(newElement);
            list.prepend(newElement);
            list.append(newElement);
            list.children[0].after(newElement);

            list.children[0].replaceWith(newElement)



                Clonar y eliminar elementos
                    element.cloneNode(true|false) - Clona el nodo. Si le pasamos true clona todo el elemento con los hijos, si le pasamos false clona solo el elemento sin hijos
                    element.remove() - Elimina el nodo del DOM
                    element.removeChild(child) - Elimina el nodo hijo del DOM


            console.log(list.cloneNode(true));

            list.after(list.cloneNode(true));

            list.remove()

            list.removeChild(list.children[0])
    </code></pre>
        </div>

    </div>

    <div class="container">
        <div class="tible">
            <h1>Hola mundo</h1>
            <h1>Código JavaScript Ejemplo 30</h1>
            <div class="content">
                <pre class="prettyprint linenums:1"><code class="language-javascript">
                    const urlUsers = 'https://min-api.cryptocompare.com/data/price?fsym=USD&tsyms=ETH,EUR,USD,BTC';

                    const button = document.getElementById('button')
                    const name = document.getElementById('name')


                    Objeto window - Es el objeto global, de él descienden todos los objetos
                        alert()
                        prompt()
                        confirm()


                    addEventListener('click', (e) => {
                        console.log(e)
                    })

                    let name = prompt('Escriba su nombre')
                    console.log(name)

                    if (confirm('Acepta?')) {
                        console.log('el usuario acepto')
                    } else {
                        console.log('el usuario no acepto')
                    }





                    if (confirm('Acepta?')) {
                        console.log('El usuario acepto');
                    } else {
                        console.log('El usuario no acepto');
                    }
                    Objeto console - Es el objeto que contiene la consola del navegador
                        https://developer.mozilla.org/es/docs/Web/API/Console
                        console.log()
                        console.dir()
                        console.error()
                    console.table()


                    console.dir(button)
                    console.error('error')
                    console.table()

                    const person = {
                        name: 'Dorian',
                        age: 30,
                        email: 'dorian@gmail.com'
                    }

                    console.table(person)

                    console.table([1,2,3,4])

                    Objeto location - Es el objeto que contiene la barra de direcciones
                        https:developer.mozilla.org/es/docs/Web/API/Location
                        location.href
                        location.protocol
                        location.host
                    location.pathname
                        location.hash
                        location.reload()


                    console.log(location.href);
                    console.log(location.protocol);
                    console.log(location.host);
                    console.log(location.pathname);
                    console.log(location.hash);
                    location.reload();

                    location.href = 'http://venemexcoin.com'

                    console.log(location.href)
                    console.log(location.protocol)
                    console.log(location.host)
                    console.log(location.pathname)
                    console.log(location.hash)
                    location.reload()

                    location.href = 'https://google.com'

                    Objeto history
                        https://developer.mozilla.org/es/docs/DOM/Manipulando_el_historial_del_navegador
                        back()
                        forward()
                        go(n|-n)
                    length


        </code></pre>
            </div>

        </div>

        <div class="container">
            <div class="tible">
                <h1>Hola mundo</h1>
                <h1>Código JavaScript Ejemplo 31</h1>
                <div class="content">
                    <pre class="prettyprint linenums:1"><code class="language-javascript">
                         Protocolo HTTP: https://es.wikipedia.org/wiki/Protocolo_de_transferencia_de_hipertexto */
                        Códigos de estado de respuesta HTTP: https://developer.mozilla.org/es/docs/Web/HTTP/Status */

                        const button = document.getElementById('button')

                        button.addEventListener('click', () => {
                            let xhr
                            if (window.XMLHttpRequest) xhr = new XMLHttpRequest()
                            else xhr = new ActiveXObject("Microsoft.XMLHTTP")

                            xhr.open('GET', 'https://jsonplaceholder.typicode.com/users')
                             xhr.open('GET', 'https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=ETH,EUR,USD,BTC')

                            xhr.addEventListener('load', (data) => {
                                const dataJSON = JSON.parse(data.target.response)
                                console.log(dataJSON)

                                const list = document.getElementById('list')

                                for (const userInfo of dataJSON) {
                                    const listItem = document.createElement('li')
                                    listItem.textContent = `${ userInfo.id} - ${userInfo.name}`
                                    list.appendChild(listItem)
                                }
                            })

                            xhr.send()
                        })

            </code></pre>
                </div>

            </div>
            <ul class="pagination">
                <li><a href="{{ route('javascript.ejemplo8') }}">...</a></li>
                <li><a href="{{ route('javascript.ejemplo9') }}">9</a></li>
                <li><a class="active" href="#">10</a></li>
                <li><a href="{{ route('javascript.ejemplo11') }}">11</a></li>
                {{-- <li><a href="#">12</a></li>
                <li><a href="#">...</a></li>
                {{-- <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">»</a></li> --}}
            </ul>
        </div>
        @push('scripts')
            <script>

            </script>
        @endpush
