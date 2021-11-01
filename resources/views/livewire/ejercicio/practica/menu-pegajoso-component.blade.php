@push('title_base')
    Menu Pegajoso
@endpush

@push('styles')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');

        html {
            scroll-behavior: smooth;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background: #f2f2f2;
            font-family: 'Roboto', sans-serif;
        }

        a {
            text-decoration: none;
        }

        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: calc(100vh - 80px);
        }

        .hero h1 {
            font-size: 80px;
        }

        .hero p {
            font-size: 30px;
            text-transform: uppercase;
            color: #113CFC;
        }

        nav {
            background: #fff;
            height: 80px;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            display: flex;
            position: sticky;
            top: 0;
            overflow: hidden;
        }

        nav a {
            flex: 1;
            height: 100%;
            text-transform: uppercase;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #000;
            transition: .2s ease-in-out all;
            font-weight: 500;
        }

        nav a:hover {
            background: #f0f0f0;
        }

        nav .indicador {
            width: 0px;
            height: 7px;
            background: #113cfc;
            position: absolute;
            bottom: 0;
            transition: .3s ease-out all;
            /* transform: translate(-500px); */
        }

        .seccion {
            min-height: 100vh;
            max-width: 800px;
            width: 90%;
            margin: auto;

            padding-top: 120px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

        }

        .seccion .card {
            background: #fff;
            height: 90%;
            padding: 40px;
            border-radius: 5px;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }

        .seccion h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .seccion p {
            line-height: 38px;
            margin-bottom: 40px;
            color: #494949;
            font-size: 20px;
        }

        .seccion img {
            width: 100%;
            vertical-align: top;
            margin-bottom: 20px;
        }



        @media screen and (max-width: 800px) {
            nav a {
                font-size: 14px;
                padding: 5px;
            }
        }

        @media screen and (max-width: 450px) {
            nav a {
                font-size: 12px;
            }
        }

    </style>
@endpush
<div>
    <div class="hero" id="hero">
        <h1>MENÚ SLIDER</h1>
        <p>HTML • CSS • Javascript</p>
    </div>

    <nav id="menu">
        <a href="#1">Sección 1</a>
        <a href="#2">Sección 2</a>
        <a href="#3">Sección 3</a>
        <a href="#4">Sección 4</a>
        <a href="#5">Sección 5</a>
        <span class="indicador" id="indicador"></span>
    </nav>

    <div class="secciones">
        <div class="seccion" id="1">
            <div class="card">
                <h1>Sección 1</h1>

                @livewire('ejercicio.crumbs.menupegajoso-info-component')

            </div>
        </div>
    </div>

    <div class="seccion" id="2">
        <div class="card">
            <h1>Sección 2</h1>

            @livewire('ejercicio.crumbs.menupegajoso-html-component')

        </div>
    </div>

    <div class="seccion" id="3">
        <div class="card">
            <h1>Sección 3</h1>

            @livewire('ejercicio.crumbs.menupegajosocss-component')

        </div>
    </div>

    <div class="seccion" id="4">
        <div class="card">
            <h1>Sección 4</h1>


            @livewire('ejercicio.crumbs.menupegajosojs-component')

        </div>
    </div>
</div>
</div>

<div class="seccion" id="5">
    <div class="card">
        <h1>Sección 5</h1>
        <img src="img/5.jpg" alt="">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet ante mattis, lacinia arcu
            nec, consequat massa. Aliquam faucibus quam eget justo posuere vehicula. Donec ac fermentum dolor,
            rhoncus congue sapien. Maecenas lacinia tellus nec turpis tempor pellentesque. Praesent in erat a
            nisl viverra dapibus. Pellentesque feugiat dolor quis sapien rutrum, sed placerat est volutpat.
            Curabitur sed convallis lacus, vel molestie ante. </p>
    </div>
</div>
</div>

</div>

@push('scripts')
    <script>
        const menu = document.getElementById('menu');
        const indicador = document.getElementById('indicador');
        const secciones = document.querySelectorAll('.seccion');

        let tamañoIndicador = menu.querySelector('a').offsetWidth;
        indicador.style.width = tamañoIndicador + 'px';

        let indexSeccionActiva;

        // Observer
        const observer = new IntersectionObserver((entradas, observer) => {
            entradas.forEach(entrada => {
                if (entrada.isIntersecting) {
                    // Obtenemos cual es la seccion que esta entrando en pantalla.
                    // console.log(`La entrada ${entrada.target.id} esta intersectando`);

                    // Creamos un arreglo con las secciones y luego obtenemos el index del la seccion que esta en pantalla.
                    indexSeccionActiva = [...secciones].indexOf(entrada.target);
                    indicador.style.transform = `translateX(${tamañoIndicador * indexSeccionActiva}px)`;
                }
            });
        }, {
            rootMargin: '-80px 0px 0px 0px',
            threshold: 0.2
        });

        // Agregamos un observador para el hero.
        observer.observe(document.getElementById('hero'));

        // Asignamos un observador a cada una de las secciones
        secciones.forEach(seccion => observer.observe(seccion));

        // Evento para cuando la pantalla cambie de tamaño.
        const onResize = () => {
            // Calculamos el nuevo tamaño que deberia tener el indicador.
            tamañoIndicador = menu.querySelector('a').offsetWidth;

            // Cambiamos el tamaño del indicador.
            indicador.style.width = `${tamañoIndicador}px`;

            // Volvemos a posicionar el indicador.
            indicador.style.transform = `translateX(${tamañoIndicador * indexSeccionActiva}px)`;
        }

        window.addEventListener('resize', onResize);
    </script>
@endpush
