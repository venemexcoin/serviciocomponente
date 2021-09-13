<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/codigojs.css') }}">
    <script src=" https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js "></script>
    <link rel="stylesheet" href="{{ asset('assets/css/codigojs.css') }}">
    <title>@stack('title_base')</title>
    @stack('styles')
    @livewireStyles
</head>

<body>
    {{ $slot }}

    @stack('scripts')
</body>

</html>
