<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>My Web Page</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body class="bg-image" style="background-image: url('https://www.buffed.de/screenshots/original/2016/06/Bartender-2--1-buffed_b2article_artwork.jpg');">
    <div class="jumbotron jumbotron-fluid" style="margin-bottom: 0">
      <div class="container">
        <h1 class="display-4">Items</h1>
        <p class="lead">Nie wieder den Überblick verlieren!</p>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!--<a class="navbar-brand" href="#">Item Manager</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/home">Home <!--<span class="sr-only">(current)</span>--></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/search">Suche</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/insert">Hinzufügen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/info">Infos</a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('info')
    @yield('insert')
    @yield('home')
    @yield('search')

    
  <!-- Your HTML content goes here -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
