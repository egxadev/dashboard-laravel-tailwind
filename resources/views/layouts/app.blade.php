<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('style')
</head>

<body class="bg-gray-100">
    @include('components.navbar')
    @include('components.sidebar')

    {{-- CONTENT --}}
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-14">
            @yield('content')
        </div>
    </div>

    @stack('script')
</body>

</html>
