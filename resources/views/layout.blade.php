<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
        <title>Anh»♥«Chi</title>
        <link rel="icon" href="/images/favicon.jpg">
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
        @yield('style')
    </head>

    <body>
        <div id="app">
            @include('elements/header')
            @yield('content')
        </div>

        <script src="/js/jquery.min.js" crossorigin="anonymous"></script>
        <script src="{{ elixir('js/app.js') }}"></script>
        @yield('script')

    </body>
</html>
