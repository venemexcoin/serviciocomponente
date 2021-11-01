<div>
    <div class="container">
        <h4>Código CSS</h4>
        <div class="content">
            <pre class="prettyprint linenums:1"><code class="language-css">
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


        </code></pre>
        </div>
        <div class="content">
            <p>Acer Confirmación del código Por consola</p>
        </div>
    </div>
</div>
