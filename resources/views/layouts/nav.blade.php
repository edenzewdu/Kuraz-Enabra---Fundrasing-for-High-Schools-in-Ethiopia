<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'custom Auth Laravel')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    @include('include.header')
   @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>


{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Kuraz Enabra</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
              <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/contact">Contact</a>
          </li>
      </ul>
  </div>
</nav> --}}