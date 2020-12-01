<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>choco.inc|registro</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style_index.css">
</head>
<body>
<header>

    <nav class="navbar navbar-expand-lg navbar-light pl">
  <a class="navbar-brand" href="index.php"><img class=" icono img-tb-fluid " src="imgs/icono_choco.jpg" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="">productos<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="productos.php">general</a>
          <div class="dropdown-divider"></div>
          <p class="text-center">choco.inc</p>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="registro_productos.php">registar productos<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
 </nav>
    
</header> 

<main>


  <div class="container">
          <div class="row">
            <div class=" col-12 col-md-3 mt-5">
              <img src="imgs/carrorosa.jpg" alt="carro col" class="img-fluid">
              <div class="mt-5">
              </div>
              </div>

              <div class="col-12 col-md-9 mt-4">
              <div class="row">
              <div class="mt-4"></div>
              <h2>PRODUCTOS(registro)</h2>

              <div class="container">
              
              <form action="resg_p.php" class="mt-5" method="POST" >
    <div class="row justify-content-center"></div>
      <div class="col-4"></div>
      
    <div class="form-group">
      <label for="text">Producto</label>
      <input type="text" class="form-control" id="inputtext" placeholder="nombre del producto" name="nombre_p"> 
      
    </div>

    <div class="form-group">
      <label for="text">Marca</label>
      <input type="text" class="form-control" id="inputtext" placeholder=" marca del producto" name="marca_p"> 
      
    </div>

    <div class="form-group">
      <label for="number">Precio</label>
      <input type="number" class="form-control" id="Inputnumber"  placeholder="precio del producto" name="precio_p">
    </div>

    <div class="form-group">
      <label for="text">Descripcion</label>
      <textarea class="form-control" id="ControlTextarea" rows="3" placeholder="descripcion la cual de una idea del produto o carateristicas del mismo" name="descripcion"></textarea>
    </div>

    <div class="form-group">
      <label for="text">imagen del producto</label>
      <input type="text" class="form-control" id="Inputtext"  placeholder="url de la imagen" name="foto">
    </div>
    
    <button type="submit" class="btn btn-primary mt-3" name="boton">registrar</button>
  </form>


</main>







<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>