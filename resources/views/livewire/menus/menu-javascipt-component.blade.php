<div>
    <style>
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


    <section class="section" id="promotion">

        <div class="contenedor">
            <div class="lista" id="lista">
            </div>
            <div class="contenedor-preview">
                <div class="preview" id="preview">
                    <h1>Selecciona un elemento de la lista</h1>
                </div>

            </div>
        </div>

    </section>
</div>
@push('scripts')
    <script>
        const lista = document.getElementById('lista'),
            preview = document.getElementById('preview'),
            btnAceptar = document.getElementById('aceptar');
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
                        `http://serviciocomponente.test/api/tasks/${postId}`);
                    const comentarios = await respuesta.json();

                    const plantilla = `
                	<p class="titulo">${comentarios.description.toLowerCase()}</p>
                    <p class="body">${comentarios.status}</p>
                     `;

                    preview.innerHTML = plantilla;
                }, 300);
            }
        });

        // Obtenemos los Post de la Lista Izquierda
        const obtenerPosts = async () => {
            const respuesta = await fetch('http://serviciocomponente.test/api/tasks');
            const body = await respuesta.json();


            await body.forEach(post => {
                lista.innerHTML += `
			<a href="#" data-post-id="${post.id}" class="elemento">
				${post.name}
			</a>
		`;
            });


        }
        obtenerPosts()
    </script>
@endpush
