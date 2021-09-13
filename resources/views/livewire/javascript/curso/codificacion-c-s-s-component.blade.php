@push('title_base')
    Codigication CSS
@endpush

@push('styles')

@endpush

<div class="container">
    <div class="tible">
        <h1>Desert</h1>
        <h1>Archivo CSS noes Response</h1>
        <pre class="prettyprint linenums:1"><code class="language-css">
            /* desert scheme ported from vim to google prettify */
            pre.prettyprint { display: block; background-color: #333 }
            pre .nocode { background-color: none; color: #000 }
            pre .str { color: #ffa0a0 } /* string  - pink */
            pre .kwd { color: #f0e68c; font-weight: bold }
            pre .com { color: #87ceeb } /* comment - skyblue */
            pre .typ { color: #98fb98 } /* type    - lightgreen */
            pre .lit { color: #cd5c5c } /* literal - darkred */
            pre .pun { color: #fff }    /* punctuation */
            pre .pln { color: #fff }    /* plaintext */
            pre .tag { color: #f0e68c; font-weight: bold } /* html/xml tag    - lightyellow */
            pre .atn { color: #bdb76b; font-weight: bold } /* attribute name  - khaki */
            pre .atv { color: #ffa0a0 } /* attribute value - pink */
            pre .dec { color: #98fb98 } /* decimal         - lightgreen */

            /* Specify class=linenums on a pre to get line numbering */
            ol.linenums { margin-top: 0; margin-bottom: 0; color: #AEAEAE } /* IE indents via margin-left */
            li.L0,li.L1,li.L2,li.L3,li.L5,li.L6,li.L7,li.L8 { list-style-type: none }
            /* Alternate shading for lines */
            li.L1,li.L3,li.L5,li.L7,li.L9 { }

            @media print {
              pre.prettyprint { background-color: none }
              pre .str, code .str { color: #060 }
              pre .kwd, code .kwd { color: #006; font-weight: bold }
              pre .com, code .com { color: #600; font-style: italic }
              pre .typ, code .typ { color: #404; font-weight: bold }
              pre .lit, code .lit { color: #044 }
              pre .pun, code .pun { color: #440 }
              pre .pln, code .pln { color: #000 }
              pre .tag, code .tag { color: #006; font-weight: bold }
              pre .atn, code .atn { color: #404 }
              pre .atv, code .atv { color: #060 }
            }

        </code></pre>
    </div>
</div>

<div class="container">
    <div class="tible">
        <h1>Pretty CSS</h1>
        <h1>Doxy pretty-printing styles</h1>
        <pre class="prettyprint linenums:1"><code class="language-css">
            /* Doxy pretty-printing styles. Used with prettify.js.  */

            pre .str, code .str { color: #fec243; } /* string  - eggyolk gold */
            pre .kwd, code .kwd { color: #8470FF; } /* keyword - light slate blue */
            pre .com, code .com { color: #32cd32; font-style: italic; } /* comment - green */
            pre .typ, code .typ { color: #6ecbcc; } /* type - turq green */
            pre .lit, code .lit { color: #d06; } /* literal - cherry red */
            pre .pun, code .pun { color: #8B8970;  } /* punctuation - lemon chiffon4  */
            pre .pln, code .pln { color: #f0f0f0; } /* plaintext - white */
            pre .tag, code .tag { color: #9c9cff; } /* html/xml tag  (bluey)  */
            pre .htm, code .htm { color: #dda0dd; } /* html tag  light purply*/
            pre .xsl, code .xsl { color: #d0a0d0; } /* xslt tag  light purply*/
            pre .atn, code .atn { color: #46eeee; font-weight: normal;} /* html/xml attribute name  - lt turquoise */
            pre .atv, code .atv { color: #EEB4B4; } /* html/xml attribute value - rosy brown2 */
            pre .dec, code .dec { color: #3387CC; } /* decimal - blue */

            a {
              text-decoration: none;
            }
            pre.prettyprint, code.prettyprint {
              font-family:'Droid Sans Mono','CPMono_v07 Bold','Droid Sans';
              font-weight: bold;
              font-size: 9pt;
              background-color: #0f0f0f;
              -moz-border-radius: 8px;
              -webkit-border-radius: 8px;
              -o-border-radius: 8px;
              -ms-border-radius: 8px;
              -khtml-border-radius: 8px;
              border-radius: 8px;
            }  /*  background is black (well, just a tad less dark )  */

            pre.prettyprint {
              width: 95%;
              margin: 1em auto;
              padding: 1em;
              white-space: pre-wrap;
            }

            pre.prettyprint a, code.prettyprint a {
               text-decoration:none;
            }
            /* Specify class=linenums on a pre to get line numbering; line numbers themselves are the same color as punctuation */
            ol.linenums { margin-top: 0; margin-bottom: 0; color: #8B8970; } /* IE indents via margin-left */
            li.L0,li.L1,li.L2,li.L3,li.L5,li.L6,li.L7,li.L8 { list-style-type: none }
            /* Alternate shading for lines */
            li.L1,li.L3,li.L5,li.L7,li.L9 { }

            /* print is mostly unchanged from default at present  */
            @media print {
              pre.prettyprint, code.prettyprint { background-color: #fff;  }
              pre .str, code .str { color: #088; }
              pre .kwd, code .kwd { color: #006; font-weight: bold; }
              pre .com, code .com { color: #0c3; font-style: italic; }
              pre .typ, code .typ { color: #404; font-weight: bold; }
              pre .lit, code .lit { color: #044; }
              pre .pun, code .pun { color: #440; }
              pre .pln, code .pln { color: #000; }
              pre .tag, code .tag { color: #b66ff7; font-weight: bold; }
              pre .htm, code .htm { color: #606; font-weight: bold; }
              pre .xsl, code .xsl { color: #606; font-weight: bold; }
              pre .atn, code .atn { color: #c71585;  font-weight: normal; }
              pre .atv, code .atv { color: #088;  font-weight: normal; }
            }

        </code></pre>
    </div>
</div>

<div class="container">
    <div class="tible">
        <h1>Pretty CSS</h1>
        <h1>Derived from einaros's</h1>
        <pre class="prettyprint linenums:1"><code class="language-css">
            /*
 * Derived from einaros's Sons of Obsidian theme at
 * http://studiostyl.es/schemes/son-of-obsidian by
 * Alex Ford of CodeTunnel:
 * http://CodeTunnel.com/blog/post/71/google-code-prettify-obsidian-theme
 */

.str
{
    color: #EC7600;
}
.kwd
{
    color: #93C763;
}
.com
{
    color: #66747B;
}
.typ
{
    color: #678CB1;
}
.lit
{
    color: #FACD22;
}
.pun
{
    color: #F1F2F3;
}
.pln
{
    color: #F1F2F3;
}
.tag
{
    color: #8AC763;
}
.atn
{
    color: #E0E2E4;
}
.atv
{
    color: #EC7600;
}
.dec
{
    color: purple;
}
pre.prettyprint
{
    border: 0px solid #888;
}
ol.linenums
{
    margin-top: 0;
    margin-bottom: 0;
}
.prettyprint {
    background: #000;
}
li.L0, li.L1, li.L2, li.L3, li.L4, li.L5, li.L6, li.L7, li.L8, li.L9
{
    color: #555;
    list-style-type: decimal;
}
li.L1, li.L3, li.L5, li.L7, li.L9 {
    background: #111;
}
@media print
{
    .str
    {
        color: #060;
    }
    .kwd
    {
        color: #006;
        font-weight: bold;
    }
    .com
    {
        color: #600;
        font-style: italic;
    }
    .typ
    {
        color: #404;
        font-weight: bold;
    }
    .lit
    {
        color: #044;
    }
    .pun
    {
        color: #440;
    }
    .pln
    {
        color: #000;
    }
    .tag
    {
        color: #006;
        font-weight: bold;
    }
    .atn
    {
        color: #404;
    }
    .atv
    {
        color: #060;
    }
}

        </code></pre>
    </div>
</div>

<div class="container">
    <div class="tible">
        <h1>Pretty CSS</h1>
        <h1>Pretty printing styles</h1>
        <pre class="prettyprint linenums:1"><code class="language-css">
            /*
 * Derived from einaros's Sons of Obsidian theme at
 * http://studiostyl.es/schemes/son-of-obsidian by
 * Alex Ford of CodeTunnel:
 * http://CodeTunnel.com/blog/post/71/google-code-prettify-obsidian-theme
 */

 /* Pretty printing styles. Used with prettify.js. */
 /* Vim sunburst theme by David Leibovic */

 pre .str, code .str { color: #65B042; } /* string  - green */
 pre .kwd, code .kwd { color: #E28964; } /* keyword - dark pink */
 pre .com, code .com { color: #AEAEAE; font-style: italic; } /* comment - gray */
 pre .typ, code .typ { color: #89bdff; } /* type - light blue */
 pre .lit, code .lit { color: #3387CC; } /* literal - blue */
 pre .pun, code .pun { color: #fff; } /* punctuation - white */
 pre .pln, code .pln { color: #fff; } /* plaintext - white */
 pre .tag, code .tag { color: #89bdff; } /* html/xml tag    - light blue */
 pre .atn, code .atn { color: #bdb76b; } /* html/xml attribute name  - khaki */
 pre .atv, code .atv { color: #65B042; } /* html/xml attribute value - green */
 pre .dec, code .dec { color: #3387CC; } /* decimal - blue */

 pre.prettyprint, code.prettyprint {
     background-color: #000;
     border-radius: 8px;
 }

 pre.prettyprint {
     width: 95%;
     margin: 1em auto;
     padding: 1em;
     white-space: pre-wrap;
 }


 /* Specify class=linenums on a pre to get line numbering */
 ol.linenums { margin-top: 0; margin-bottom: 0; color: #AEAEAE; } /* IE indents via margin-left */
 li.L0,li.L1,li.L2,li.L3,li.L5,li.L6,li.L7,li.L8 { list-style-type: none }
 /* Alternate shading for lines */
 li.L1,li.L3,li.L5,li.L7,li.L9 { }

 @media print {
   pre .str, code .str { color: #060; }
   pre .kwd, code .kwd { color: #006; font-weight: bold; }
   pre .com, code .com { color: #600; font-style: italic; }
   pre .typ, code .typ { color: #404; font-weight: bold; }
   pre .lit, code .lit { color: #044; }
   pre .pun, code .pun { color: #440; }
   pre .pln, code .pln { color: #000; }
   pre .tag, code .tag { color: #006; font-weight: bold; }
   pre .atn, code .atn { color: #404; }
   pre .atv, code .atv { color: #060; }
 }

        </code></pre>
    </div>
</div>
