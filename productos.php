
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>choco.inc|productos</title>
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
<?php
       include("data_base.php");
       $operacionBD=new BaseDatos_amiguis();
       $consultarDATOS="SELECT * FROM `productos` WHERE 1";
       $productos=$operacionBD->consultarDATOS($consultarDATOS);
      
?>


<div class="container">
        
        <div class="row row-cols-1 row-cols-md-4">
            <?php foreach($productos as $p):?>          
          <div class="col mb-4 mt-3">  
            <div class="card h-100">
                <img src="<?php echo($p["foto"])?>" class=" card-img-top img_fluid img_cards" alt="foto " >
                    <div class="card-body">
                    <h5 class="card-title"><?php echo($p["nombre"]); ?></h5>
                    <p class="card-text">marca:<?php echo($p["marca"]) ?></p>
                     <p class="card-text"><?php echo($p["descripcion"])  ?></p>
                     <p class="card-text">precio: $<?php echo($p["precio"])  ?></p>
                    <div class="row row-cols-1 row-cols-md-4">
                      <div class="col mb-4">
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($p["id_producto"])?>">Editar
                        </button>
                      </div>
                      <div class="col mb-4 ml-5">
                      <a href="delete_p.php?id=<?php echo($p["id_producto"])?>" class="btn btn-danger">Eliminar</a>
                      </div>
                    </div>
                     </a>
                </div>
            </div>

            <div class="modal fade" id="editar<?php echo($p["id_producto"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ojo con lo que hace</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="editar.php?id=<?php echo($p["id_producto"])?>" method="POST">
                    
                      <div class="form-group">
                        <label>Nombre:</label>
                        <input type="text" name="nombreEditar" class="form-control" value="<?php echo($p["nombre"]); ?>">  
                        </div>
                        
                        <div class="form-group">
                        <label>marca:</label>
                        <input type="text" name="marcaEditar" class="form-control" value="<?php echo($p["marca"]); ?>">  
                        </div>

                        <div class="form-group">
                        <label>precio:</label>
                        <input type="number" name="precioEditar" class="form-control" value="<?php echo($p["precio"]); ?>">  
                        </div>

                        <div class="form-group">
                            <label>Descripcion:</label>
                            <textarea class="form-control" name="descripcionEditar" rows="3"><?php echo($p["descripcion"])  ?></textarea>  
                        </div>

                        <div class="form-group">
                        <label>url imagen:</label>
                        <input type="text" name="fotoEditar" class="form-control" value="<?php echo($p["foto"]); ?>">  
                        </div>

                        <button type="submit" class="btn btn-primary" name="botonEditar">Enviar</button>
                    </form> 
                  </div>
                </div>
              </div>
            </div> 


          </div>
        


         <?php endforeach?>

         
      </div>


    
</div>
</main>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>



