<?php 
session_start();
$_SESSION["usuario"]=null;
unset($_SESSION["usuario"]);



require_once 'controles/usuario.php';
if (!empty($_POST) ) {


     $miUsuario=new Usuario($_POST['nombre'],$_POST['clave'],"","");
      if ($miUsuario->validar()) {
        $_SESSION["usuario"]=$miUsuario;
        header("Location:usuario/index.php ");
      }
      else{

      }

    
  
}else{
}
 ?>
<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/app.css">
  <link rel="stylesheet" href="assets/icon/font/css/open-iconic-bootstrap.min.css">
  <title>Inicio</title>
</head>
<body>

  <header id="header-container" class="">
    <div class="container fondoColor">
      <div class="row">

        <div class="col-1">
          <img Height="65px" Width="76px" src="assets/imagenes/logo.png" alt="Responsive image"/>
        </div>
        <div class="col-10 text-center">
          <h2>Ticket´s ++</h2>
        </div>
        <div class="col-1">
        </div>
      </div>
    </div>
  </header>
  <br />
  <br />
  




  <form   method="POST" action="index.php">
    <div class="container">
      <div class="row">
        <div class="col-sm-1 col-md-3 col-lg-3 col-xl-3 ">
        </div>
        <div class="col-sm10 col-md-6 col-lg-6 col-xl-6">
          <div class="row justify-content-md-center ">
            <div class="col align-content-center">
              <div class="card bg-light ">
                <div class="card-header fondoColor text-center">
                  <h4 class="card-title">Inicio de Sesión</h4>
                </div>
                <div class="card-body">
                  <div class="card-body">

                    <div class="form-group">
                      <label for="TextBoxNumDeControl">
                        <span class="oi oi-person"></span>Correo:
                      </label>

                      <input id="nombre" class="form-control" type="text" placeholder="nombre" name="nombre" required>
          
                    </div>
                    <div class="form-group">
                      <label for="password">
                        <span class="oi oi-key"></span>Contraseña:</label>
                        <input id="clave" class="form-control" type="password" placeholder="clave"  name="clave" required>
 
                    </div>
                    <div class="row center-align">
                    </div>

               
                    <div class="form-group my-2">
                    <input type="submit" value="Buscar" class="btn btn-success btn-lg btn-block" />
                                         
                    </div>
                  </div>
                </div>
                <div class="footer  text-center">
                    <a href="#" class="alert-link">
                        Olvide mi contraseña
                      </a>
                 <br>
                  <a href="#" class="alert-link">
                    Registrame
                  </a>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-sm-1 col-md-3 col-lg-3 col-xl-3">
        </div>
      </div>
    </div>
  </form>

  
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>