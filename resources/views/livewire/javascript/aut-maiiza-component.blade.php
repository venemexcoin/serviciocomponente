@push('title_base')
    Ejemplo de artomatizacón
@endpush

@push('styles')
    <script src=" https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js "></script>

    <style>
        .container {
            padding: 30px 20px;
        }

        h1 {
            text-align: center;
        }

        pre.prettyprint {
            display: block;
            background-color: rgb(9, 9, 9)
        }

        pre .nocode {
            background-color: none;
            color: #000
        }

        pre .str {
            color: lime;
            font-style: italic;
        }

        /* string  - pink */
        pre .kwd {
            color: mediumturquoise;
            font-weight: bold
        }

        pre .com {
            color: rgba(255, 255, 255, 0.5)
        }

        /* comment - skyblue */
        pre .typ {
            color: #98fb98
        }

        /* type    - lightgreen */
        pre .lit {
            color: magenta
        }

        /* literal - darkred */
        pre .pun {
            color: white
        }

        /* punctuation */
        pre .pln {
            color: #fff
        }

        /* plaintext */
        pre .tag {
            color: #f0e68c;
            font-weight: bold
        }

        /* html/xml tag    - lightyellow */
        pre .atn {
            color: #bdb76b;
            font-weight: bold
        }

        /* attribute name  - khaki */
        pre .atv {
            color: #ffa0a0
        }

        /* attribute value - pink */
        pre .dec {
            color: #98fb98
        }

        /* decimal         - lightgreen */

        /* Specify class=linenums on a pre to get line numbering */
        ol.linenums {
            margin-top: 0;
            margin-bottom: 0;
            color: rgba(255, 255, 255, 0.3)
        }

        /* IE indents via margin-left */
        li.L0,
        li.L1,
        li.L2,
        li.L3,
        li.L5,
        li.L6,
        li.L7,
        li.L8 {
            list-style-type: decimal
        }

        /* Alternate shading for lines */
        li.L1,
        li.L3,
        li.L5,
        li.L7,
        li.L9 {
            background-color: rgba(5, 5, 5, 0.1);
        }

        @media print {
            pre.prettyprint {
                background-color: none
            }

            pre .str,
            code .str {
                color: #060
            }

            pre .kwd,
            code .kwd {
                color: #006;
                font-weight: bold
            }

            pre .com,
            code .com {
                color: #600;
                font-style: italic
            }

            pre .typ,
            code .typ {
                color: #404;
                font-weight: bold
            }

            pre .lit,
            code .lit {
                color: #044
            }

            pre .pun,
            code .pun {
                color: #440
            }

            pre .pln,
            code .pln {
                color: #000
            }

            pre .tag,
            code .tag {
                color: #006;
                font-weight: bold
            }

            pre .atn,
            code .atn {
                color: #404
            }

            pre .atv,
            code .atv {
                color: #060
            }
        }

        /* CSS del formulario falcon master */
        a {
            text-decoration: none;
        }

        body {
            background: #f2f2f2;
            display: flex;
            min-height: 100vh;
            align-items: center;
            justify-content: center;
            font-family: 'Roboto', sans-serif;
        }

        .contenedor {
            width: 100%;
            max-width: 800px;
            height: 500px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            background: #fff;
            display: grid;
            grid-template-columns: 1fr 2fr;
            border-radius: 5px;
        }

        .lista {
            max-height: 100%;
            overflow-y: auto;
            border-right: 1px solid #e9e9e9;
        }

        .lista .elemento {
            color: #000000;
            display: block;
            padding: 20px;
            font-size: 14px;
            font-weight: bold;
            border-bottom: 1px solid #e9e9e9;
            text-transform: capitalize;
        }

        .lista .elemento.activo {
            background: #f0f0ff;
        }

        .lista .elemento.aceptado {
            font-weight: normal;
            color: #8f8aa3;
        }

        .contenedor-preview {
            display: flex;
            flex-direction: column;
        }

        .preview {
            height: 100%;
            padding: 20px;
        }

        .preview .titulo {
            margin-bottom: 20px;
            font-size: 32px;
        }

        .preview p {
            line-height: 30px;
            margin-bottom: 20px;
        }

        .preview .respuesta {
            padding: 20px;
            background: #f2f2f2;
            border-radius: 5px;
        }

        .contenedor-boton {
            padding: 20px;
            display: flex;
            justify-content: end;
            gap: 10px;
        }

        .contenedor-boton input {
            width: 100%;
            height: 50px;
            padding: 15px;
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            border-radius: 3px;
            border: 1px solid #1ECB83;
        }

        .contenedor-boton input:focus {
            outline: none;
        }

        .contenedor-boton button {
            cursor: pointer;
            border: none;
            padding: 15px 20px;
            color: #fff;
            font-weight: normal;
            background: #1ECB83;
            font-family: 'Roboto', sans-serif;
            transition: .3s ease all;
            border-radius: 5px;
        }

        .contenedor-boton button:hover {
            background: #0fa767;
        }

    </style>


@endpush
<div class="container">
    <div class="contenedor">
        <div class="lista" id="lista">
        </div>
        <div class="contenedor-preview">
            <div class="preview" id="preview">
                <h1>Selecciona un elemento de la lista</h1>
            </div>
            <div class="contenedor-boton">
                <input type="text" id="mensaje" placeholder="Mensaje">
                <button id="aceptar">Aceptar</button>
            </div>
        </div>
    </div>



    <h1>Código JavaScript Ejemplo 1</h1>
    <pre class="prettyprint linenums:1"><code class="language-javascript">
    /* Ejecutar Funciones Automáticamente (Sin botones) [JS] */
    
    document.querySelectorAll('#lista a').forEach((enlace, index) => {
         setTimeout(() => {
         enlace.click();
          
         setTimeout(() => {
         document.getElementById('mensaje').value = "Respuesta registrada";
         document.getElementById('aceptar').click();
           }, 1000)
           }, index * 2000);
           })
    </code></pre>




</div>
@push('scripts')
    <script>
        const lista = document.getElementById('lista');
        const preview = document.getElementById('preview');
        const btnAceptar = document.getElementById('aceptar');
        let elementosLista = document.querySelectorAll('#lista a');
        let postId;

        // Eventlistener para click en los elementos de la lista.
        document.addEventListener('click', (e) => {
            if (e.target && Array.from(e.target.classList).includes('elemento')) {
                e.preventDefault();

                // Quitamos la clase activo de los demas elementos.
                lista.querySelectorAll('.activo').forEach(elemento => elemento.classList.remove('activo'));
                // Ponemos la clase activo al elemento actual
                e.target.classList.toggle('activo');

                setTimeout(async () => {
                    // Obtenemos el ID
                    postId = e.target.dataset.postId;

                    // Llamamos la API y pasamos datos al contenedor
                    const respuesta = await fetch(
                        `https://jsonplaceholder.typicode.com/comments?postId=${postId}`);
                    const comentarios = await respuesta.json();

                    const plantilla = `
				<p class="titulo">${comentarios[0].email.toLowerCase()}</p>
				<p class="body">${comentarios[0].body}</p>
			`;

                    preview.innerHTML = plantilla;
                }, 300);
            }
        });

        // Obtenemos los Post de la Lista Izquierda
        const obtenerPosts = async () => {
            const respuesta = await fetch('https://jsonplaceholder.typicode.com/posts');
            const body = await respuesta.json();

            await body.forEach(post => {
                lista.innerHTML += `
			<a href="#" data-post-id="${post.id}" class="elemento">
				${post.title}
			</a>
		`;
            });
        }
        obtenerPosts();

        btnAceptar.addEventListener('click', (e) => {
            setTimeout(() => {
                lista.querySelector('.activo').classList.add('aceptado');

                const mensaje = document.getElementById('mensaje');
                document.getElementById('mensaje').innerHTML = '';
                preview.innerHTML += `
			<p class="respuesta">${mensaje.value}</p>
		`;
                mensaje.value = '';
            }, 300);
        });

        // document.querySelectorAll('#lista a').forEach((enlace, index) => {
        // 	setTimeout(() => {
        // 	  enlace.click();

        // 	setTimeout(() => {
        // 	 document.getElementById('mensaje').value = "Respuesta registrada";
        // 	 document.getElementById('aceptar').click();
        //   }, 1000)
        //   }, index * 2000);
        //   })
    </script>
@endpush
