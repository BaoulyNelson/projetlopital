
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion d'Hopital</title>
    @yield('styles')
    <!-- Autres balises meta, title, etc. -->
    <link href="{{ asset('css/tables.css') }}" rel="stylesheet">
  
</head>
<body>
    @include('welcome')
  
  
    @include('partials.footer')
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>