<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        @livewireScripts
        <script src="{{ mix('js/app.js') }}"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="py-2 bg-blue-600">
            <div class="mx-auto">
                <div class="text-center">
                    <p class="text-m text-gray-300">
                        {{ config('app.name') }} is still in beta. Any issues please <a href="mailto:smirkyisms@th0rn0.co.uk">contact us here</a>.
                    </p>
                </div>
            </div>
        </div>
        <x-jet-banner />

        <div class="flex flex-col min-h-screen bg-gray-600">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="flex-grow">
                {{ $slot }}
            </main>
            <footer>
              <p class="text-center p-4 bg-gray-600 text-gray-300">
                Created by <a class="border-b text-green-400" href="https://th0rn0.co.uk" target="_blank">Th0rn0</a>. Built with Vodka and Hatred.
              </p>
            </footer>
        </div>

        @stack('modals')

    </body>
</html>
