@php
    $theme = App\models\Theme::first()->name;
@endphp
<!doctype html>
<html data-theme="{{ $theme }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? '' }} - LicenseCard SAMSAT</title>

    @yield('css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400;1,600&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    @livewireStyles
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body>
    <div class="min-h-full">
        <x-nav></x-nav>

        <header class="">
            <div class="px-4 py-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight hover:text-warning">{{ $title ?? '' }}</h1>
            </div>
        </header>
        <main>
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>


    @livewireScripts
    @yield('js')
</body>

</html>
