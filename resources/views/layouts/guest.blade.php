<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{ asset('storage/img/logo-hoptial.svg') }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
                <script src="https://cdn.tailwindcss.com"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        {!! ReCaptcha::htmlScriptTagJsApi() !!}
        @stack('scripts')
        <style>
            .background{
                background: url("/storage/img/background.jpg") !important;
                background-repeat: no-repeat !important;
                object-fit: contain !important ;
               
               
            }
        </style>

        
    </head>
    <body class="font-sans text-gray-900 antialiased ">
        <div class="min-h-screen background flex flex-col sm:justify-center text-gray-900 items-center pt-6  sm:pt-0 bg-white ">
            <div  class="mx-32">
                <a href="/" title="Home">
                    <x-application-logo class="w-20 h-20  mx-auto  text-gray-500" />
                </a>
            </div>

            <div class="w-full  sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
