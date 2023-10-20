<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de control escolar Cetis 107</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <script src="{{ asset('code.jquery.com_jquery-3.7.1.js') }}"></script>
</head>
<body>

   
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #424242">

        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">Hidden brand</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <nav class="navbar navbar-expand-lg navbar-ligth bg-ligth"></nav>
      <div class="container">
        <div class="row">
            <div class="col-12">
                @yield('contenido')

            </div>
        </div>
      </div>
      <footer><hr>
    Sistema de control escolar &copy; 2023</footer>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    </body>

</html>
