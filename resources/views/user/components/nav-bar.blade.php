<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="description" content="@yield('description','martial art club in Indonesia')">
  <meta name="keywords" content="@yield('keywords','martial art , boxing')">
  <title>GAGAK PUTIH INDONESIA - @yield('title','Martial art club')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="/">
      <img src="/image/martialArtLogo.png" alt="Logo" class="img-fluid" style="height: 60px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <x-nav-link href="/" :active="request()->is('userDashboard')"  class="nav-link text-white">
            About Us
          </x-nav-link>
        </li>
        <li class="nav-item">
          <x-nav-link href="/event" :active="request()->is('event')" class="nav-link text-white" >
            Event
          </x-nav-link>
        </li>
        <li class="nav-item">
          <x-nav-link href="{{route('member.registerMember')}}" :active="request()->is('registerMember')"  class="nav-link text-white">
            Registration
          </x-nav-link>
        </li>
        <li class="nav-item">
          <x-nav-link href="/member" :active="request()->is('member')"  class="nav-link text-white">
            Member
          </x-nav-link>
        </li>
      </ul>

      <div class="d-flex align-items-center">
        <span class="text-white me-3 fw-semibold">Hi, Sunshine!</span>
        <button class="btn btn-info text-white fw-semibold">Log Out</button>
      </div>
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-QF2np0z4TyBpS1JoS6e40YV5TU4fBD1V9A+Q/6LxFw+0lCqptmjAk47kL/AaZH61" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-QHLZsO+C5uhVeVHF4vNzubn51UjBqg1hDSB/3qDr4RFDcZOS4OhMmv58hI3HpgyT" crossorigin="anonymous"></script>
</body>
</html>