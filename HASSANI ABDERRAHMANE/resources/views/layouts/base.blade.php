<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
  <style>
    html{
      margin: 8px;
    }
  </style>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="cont-nav">
    <a class="navbar-brand" href="{{ route('stagiaires.index')}}">Acceuil</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="{{ route('stagiaires.create')}}">Ajouter un stagiaire</a>
      </div>
    </div>
  </nav>
  <div class="container">
    @yield('content')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>
