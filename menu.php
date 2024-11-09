<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
    
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Enlace a tu hoja de estilos personalizada -->
    <link rel="stylesheet" href="menu.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#">INICIO</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav me-auto">
      <li class="nav-item">
        <a class="nav-link active" href="suma.html">SUMA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="resta.html">RESTA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="producto.html">PRODUCTO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="division.html">DIVISIÓN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="raiz.html">RAÍZ CUADRADA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cubica.html">RAÍZ CÚBICA</a>
      </li>
    </ul>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
      <button class="btn btn-outline-light" type="submit">Buscar</button>
    </form>
  </div>
</nav>

<!-- Contenido principal -->
<div class="container mt-5">
  <h1>Bienvenido a nuestro sitio web!</h1>
  <p>Este es un ejemplo de Bootstrap con estilos personalizados.</p>
</div>

<!-- Enlaces a los scripts de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRRo9BOB1O29Aq2v5IRZ9mVhHeEYh5YDUdKLp3FZoq" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybSwNV6+GpkfJ5FugGQ0bD1zGh7Jp3yBzt58W2XIZcIWZXOap" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-VrITaUo+xAfoRPZZrwZg7Cvc4pSaDdhGi8omYeFfFrnqYMz4h4gx86e/t05OL6Nd" crossorigin="anonymous"></script>
</body>
</html>
