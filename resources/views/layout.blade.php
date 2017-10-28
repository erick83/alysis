<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SISCOST</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown" id="inventario">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Inventario
          </a>
          <div class="dropdown-menu" aria-labelledby="inventario">
            <a class="dropdown-item" href="/inventario">Agregar Inventario</a>
            <a class="dropdown-item" href="/inventarios">Lista de Inventarios</a>
          </div>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="productos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Productos
          </a>
          <div class="dropdown-menu" aria-labelledby="productos">
            <a class="dropdown-item" href="/producto">Agregar Producto</a>
            <a class="dropdown-item" href="/productos">Lista de Productos</a>
          </div>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="servicios" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Servicios
          </a>
          <div class="dropdown-menu" aria-labelledby="servicios">
            <a class="dropdown-item" href="/servicio">Agregar Servicio</a>
            <a class="dropdown-item" href="/servicios">Lista de Servicios</a>
          </div>
        </li>

        <li class="nav-item" id="constantes">
          <a class="nav-link" href="/constantes">Constantes de Cálculo</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">Cálculo de Precios</a>
        </li>
      </ul>
    </div>
  </nav>
  @yield('content')
</body>
</html>