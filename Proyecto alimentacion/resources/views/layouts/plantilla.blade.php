<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Pengyi, Qixian, Wenting" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Web Alimentación')</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">


    <!-- CSS global -->
    <link rel="stylesheet" href="{{ asset('jquery/jquery-ui.min.css') }}" type="text/css" /> <!-- Para el datepicker del simulador de fecha -->
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}" type="text/css" /> <!-- Footer -->

    <!-- CSS específicos -->
    @stack('styles')
</head>
<body>
    <header>
        
    </header>
    <nav>
    @include('componentes.navbar')
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>
        @include('componentes.footer')
    </footer>
    <aside>
    </aside>

    <!-- JS global -->
    <script src="{{ asset('jquery/jquery-3.7.1.min.js') }}" type="text/javascript"> </script>
	<script src="{{ asset('jquery/jquery-ui.min.js') }}" type="text/javascript"> </script>
    <script src="{{ asset('js/menu.js') }}" type="text/javascript"> </script>

    <!-- JS específicos -->
    @stack('scripts')
</body>
</html>