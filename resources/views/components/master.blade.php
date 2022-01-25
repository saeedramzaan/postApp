<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <section class="px-8 py-4 mb-6 nav-color">
            <header class="container mx-auto">


                <div class="flex space-around ...">

                    <a href="/posts">
                        <img src="/images/notify.png" width="38px">
                    </a>
                    <a style="margin:auto;" href="/posts">
                        <img src="/images/logo.png" alt="" width="150px">
                    </a>

                    <a href="/posts">
                        <img src="/images/user.png" width="38px">
                    </a>
                </div>

            </header>
        </section>

        {{ $slot }}
    </div>

    <script src="http://unpkg.com/turbolinks"></script>
</body>

</html>
