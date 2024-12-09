<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <title>Martialart - @yield('title','Martial art club')</title>
    <meta name="description" content="@yield('description','Indonesia martial art club' )">
    <meta name="keywords" content="@yield('keywords','martial, martial art,boxing , indonesia martial art, indonesia martial club')">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
<x-nav-bar></x-nav-bar>
  <main class="mt-5 pt-5">
    {{ $slot }}
  </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
