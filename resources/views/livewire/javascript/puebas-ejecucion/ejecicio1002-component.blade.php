@push('title_base')
    1002 Pactica
@endpush

@push('styles')
    <style>
    </style>
@endpush
<div>
    <a href="{{ route('javascript.ejercicio1') }}">Back</a>
    <div class="container">
        <label for="resultado">Resultado de la suma</label>
        <p id="resultado"></p>
    </div>
</div>



<script>
    function capturarEntero() {
        do {
            let numero = window.prompt('Digite un número:', '0');

            if (!Number.isNaN(Number(numero))) {
                return parseInt(numero);
            }
        } while (true);
    }

    window.onload = function() {
        let numero1 = capturarEntero();
        let numero2 = capturarEntero();

        let suma = numero1 + numero2;

        document.getElementById('resultado').innerText = suma;
    }
</script>
</div>
