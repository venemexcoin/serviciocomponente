@push('title_base')
    codigicar
@endpush

@push('styles')
    <script src=" https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js "></script>

    <style>
        pre.prettyprint {
            display: block;
            background-color: rgb(68, 0, 68)
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
            background-color: rgba(255, 255, 255, 0.1);
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
<div>
    <h1>Código HTML</h1>
    <pre class="prettyprint linenums:1"><code class="language-html">
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;title&gt;Document&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;/body&gt;
&lt;/html&gt;
    </code></pre>

    <hr>

    <h1>Código CSS</h1>
    <pre class="prettyprint linenums:1"><code class="language-css">
body{
    margin: 0;
    padding: 0;
}

@keyframes animacion {
    from{
        top:0;
    }
    to{
        top:500px;
    }
}
    </code></pre>

    <hr>

    <h1>Código JavaScript</h1>
    <pre class="prettyprint linenums:1"><code class="language-javascript">
    /* esto es un comentario */
    function setup() {
      createCanvas(400, 400);
      console.log("Hola mundo")
    }

    function draw() {
      background(220);
    }
    </code></pre>

    <hr>

    <h1>Código Java</h1>
    <pre class="prettyprint linenums:1"><code class="language-java">
public static void main(int[] args){
    System.out.println("Hola mundo")
}
    </code></pre>

    <h1>Código C</h1>
    <pre class="prettyprint linenums:1"><code class="language-c">
/* Programa: Hola mundo */

#include &lt;conio.h&gt;
#include &lt;stdio.h&gt;

int main()
{
    printf( "Hola mundo." );

    getch(); /* Pausa */

    return 0;
}
    </code></pre>

    <h1>Código Python</h1>
    <pre class="prettyprint linenums:1"><code class="language-python">
import datetime
now = datetime.datetime.now()
print ("Current date and time : ")
print (now.strftime("%Y-%m-%d %H:%M:%S"))
    </code></pre>

</div>
@push('script')

@endpush
