<style>
    .center {
        padding: 30px;
    }

    .outer {
        display: flex;
        justify-content: center;
        align-items: center;
        background: #111;
    }

    .button {
        height: 46px;
        width: 79px;
        border-radius: 50px;
    }

    .outer .button button,
    .outer span {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .outer button {
        background: #111;
        color: #f2f2f2;
        outline: none;
        border: none;
        font-size: 10px;
        z-index: 9;
        letter-spacing: 1px;
        text-transform: uppercase;
        cursor: pointer;
    }

    .outer button {
        height: 37px;
        width: 65px;
        border-radius: 50px;
    }

    .outer .button a {
        text-decoration: none;
    }

    .outer .button span {
        height: 100%;
        width: 100%;
        background: inherit;
    }

    .button span {
        border-radius: 50px;

    }

    .outer:hover span:nth-child(1) {
        filter: blur(7px)
    }

    .outer:hover span:nth-child(2) {
        filter: blur(14px)
    }

    .outer:hover {
        background: linear-gradient(#14ffe9, #ffeb3b, #ff00e0);
        animation: rotate 1.5s linear infinite;
    }

    @keyframes rotate {
        0% {
            filter: hue-rotate(0deg);
        }

        100% {
            filter: hue-rotate(360deg);
        }
    }

    @media (max-width:640px) {
        .center {
            flex-wrap: wrap;
            flex-direction: column;
        }

        .outer {
            margin: 50px 0px;

        }
    }

    @media (max-width: 30em) {
        .outer {
            background: linear-gradient(#14ffe9, #ffeb3b, #ff00e0);
            animation: rotate 1.5s linear infinite;
        }

        .outer button {
            height: 38px;
            width: 72px;
            border-radius: 50px;
        }
    }

</style>

<div class="center">
    <div class="outer button">
        <button><a href="{{ $slot }}">New Page</a></button>
        <span></span>
        <span></span>
    </div>

</div>
</div>
