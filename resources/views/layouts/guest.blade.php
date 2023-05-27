<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BKK') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="grid grid-cols-1 lg:grid-cols-2 min-h-screen">
        <div class="bg-indigo-700 lg:rounded-r-3xl flex flex-col justify-center items-center shadow-lg">
            <div class="w-2/3">
                @include('components.animations.login-animation')
            </div>
            <h2 class="text-white text-2xl lg:text-4xl pb-16 w-2/3 text-center">
                Sistem Kendali <br>Program Aktivitas Badan Kerjasama dan Kehumasan
            </h2>
        </div>
        <div class=" h-full flex items-center justify-center flex-col mt-16 lg:mt-0">
            <div class="text-center mb-8">
                <h1 class="font-black text-2xl">Hello, Again.</h1>
                <p class="text-gray-400">Masukkan Email dan Password</p>
            </div>
            <div class="w-full px-16">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>
