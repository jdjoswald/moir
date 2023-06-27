<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
 
    <!-- CSRF Token -->
  
    <title>@yield('title')</title>

 
   
    
    @yield('css')
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/telegrama">Telegrama</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/informe/create">Informe</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/informe">Imprimir informe</a>
        </li>
      </ul>
    </div> 
  </nav>

        <div class="container my-3">
            @yield('content')
        </div>
    </div>
    @yield('js')
</body>
@yield('js')

</html>
