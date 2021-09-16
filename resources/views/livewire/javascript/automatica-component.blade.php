@push('title_base')
    Ejecutar Funciones Automáticamente (Sin botones) [JS]
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

    </style>


@endpush
<div class="container">



    <h1>Código JavaScript Ejemplo 1</h1>
    <pre class="prettyprint linenums:1"><code class="language-javascript">
    /* Ejecutar Funciones Automáticamente (Sin botones) [JS] */

        window.onload = function Ejenplo1 ()
        {
            /* alert('Este es el ejemplo1');*/
            /* window.print(); */

            header('location: http://google.com'); /* devio a otra pagina */

        }
    </code></pre>

    <p>- *Uso de una funcion que se ejecutara al inicio de la pagina </p>
    <p>- *Podemos incluir codigo php delntro de la función. Hay que colocar etiqueta de apetura y cierre</p>

    <h1>Código JavaScript Ejemplo 2</h1>
    <pre class="prettyprint linenums:1"><code class="language-javascript">
    /* Ejecutar Funciones Automáticamente (Sin botones) [JS] */
    window.onload = function ejemplo2()
    {
        setTimeout('accionProgramada()', hora());
    }

    function hora()
    {
        horaActual = new Date();
        horaProgramada = new Date();
        horaProgramada.setHours(15);
        horaProgramada.setMinutes(0);
        horaProgramada.setSeconds(0);
        return horaProgramada.getTime() - horaActual.getTime();
    }

    function accionProgramada()
    {
        alert("AccionProgramada")
    }
    </code></pre>

    <h1>Código JavaScript Ejemplo 3</h1>
    <pre class="prettyprint linenums:1"><code class="language-javascript">
    /* Ejecutar Funciones Automáticamente (Sin botones) [JS] */
       let funcion = "si";

       if(funcion == "si")
       {
           alert("Este es el ejemplo numero 3");
       }

    </code></pre>
    <p> - *Que la función se ejecute apartir de balor de una variable</p>
    <p> - *Esto puede se un claro ejemplo cuando estas trabajando con un API que tien valores + o -</p>

</div>
@push('script')

@endpush
