<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Y Technologies | @yield('page_title')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="/css/main.css">
    {{-- <link rel="stylesheet" href="build/assets/app-fb42db8a.css">
    <script src="/build/assets/app-0d91dc04.js" defer></script> --}}
    @yield('styles')
</head>

<body class="bg-stone-200">
    @include('master.partials.header')
    @yield('content')
    @include('master.partials.footer')

    <script src="/js/main.js"></script>
    @yield('scripts')
</body>

</html>
