<html>
    <head>
        <title>{{ env('APP_NAME') }} - @yield('title')</title>
        <meta charset="utf-8">
        @yield('meta')
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/tailwindcss">
            @yield('styles')
        </style>
        @vite('resources/css/app.css')
    </head>
    <body>
        @yield('navbar')
        @yield('leftbar')
        @yield('content')
        <script>
        @section('scripts')
        @show
        </script>
    </body>
    @yield('footer')
</html>

