<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DevStargram - @yield('titulo')</title>
        @vite('resources/css/app.css')
    </head>
    <body class=" bg-gray-100">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center ">
                <h1 class="text-3xl font-black">DevStagram</h1>
                <nav>
                    <a class="font-bold uppercase text-gray-500 text-sm" href="">login</a>
                    <a class="font-bold uppercase text-gray-500 text-sm" href="{{ route('register') }}">crear cuenta</a>
                </nav>
            </div>
        </header>

        <main class="container mt-10 p-5 mx-auto">
            <div class="">
                <h2 class="font-black text-center text-3xl mb-10">@yield('titulo')</h2>
                @yield('contenido')
            </div>
        </main>

        <footer class="text-center uppercase p-5 text-gray-500 font-bold mt-10">
            DevStagram - todos los derechos reservados {{ now()->year }}.
        </footer>
    </body>

</html>
