<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Y Technologies | @yield('page_title')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="/css/main.css">
    {{-- <link rel="stylesheet" href="/build/assets/app-fb42db8a.css">
    <script src="/build/assets/app-0d91dc04.js" defer></script> --}}
    {{-- Fontawesome Icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('styles')
</head>

<body class="bg-stone-200">
    <div class="flex h-screen">
        <aside class="w-16 sm:w-52 xl:w-64 bg-white text-gray-300 sticky top-0 overflow-y-auto">
            @include('master.partials.sidebar')
        </aside>
        <div class="flex-1 bg-gray-100 overflow-y-auto">
            {{-- Navbar --}}
            @include('master.partials.header')
            {{-- content --}}
            @yield('content')
            {{-- Footer --}}
            @include('master.partials.footer')
        </div>
    </div>

    {{-- Scripts --}}
    <script src="/js/main.js"></script>
    @yield('scripts')
</body>

</html>
