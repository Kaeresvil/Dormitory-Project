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
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .head-container{
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: space-between;
                padding: 0 130px;
                height: 50px;
                width: 100%;
                border-bottom: 1px solid #e6e6e6;
                border-top: 2px solid #77b375;
            }
            .navbar-brand{
                font-size: 17px;
                color: rgb(85, 85, 85);
            }
        </style>
    </head>
    <body>
    <div class="head-container">
                <nav class="navbar fixed-top navbar-light bg-primary">
                <a class="navbar-brand" href="#">MMSU Dormitory</a>
                </nav>
                </div>           

        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
