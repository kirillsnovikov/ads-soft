<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>
        <meta name="title" content="@yield('meta_title')">
        <meta name="keywords" content="@yield('meta_keyword')">
        <meta name="description" content="@yield('meta_description')">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <header>
            <a href="{{route('index')}}">
                <img src="https://ads-soft.ru/local/templates/ads-soft.ru/images/logo.png" alt="АДС-софт">
            </a>
        </header>
        <div id="app">
            @if(session('alert'))
            <div class="alert alert-success" role="alert">
                {{session('alert')}}
            </div>
            @endif
            <search-component></search-component>
        </div>
    </body>
</html>
