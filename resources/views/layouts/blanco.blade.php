<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@stack('title_base')</title>
    @stack('styles')
    @livewireStyles
</head>

<body>

    {{ $slot }}

    @stack('scripts')
</body>

</html>
