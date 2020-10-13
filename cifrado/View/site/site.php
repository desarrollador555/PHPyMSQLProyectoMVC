<?php
    
    if(!empty($_POST['user']) && !empty($_POST['contraseña'])){
        $nombre=$_POST['user'];
        $contraseña=$_POST['contraseña'];
        
            if($nombre==$credenciales['user'] && $contraseña==$credenciales['contraseña']){
                $_SESSION['user']=$nombre;
            }
    }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <div class="container">
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post" class="border mt-3 p-3">
            <div class="form-group">
            <h1 class="" style="text-align: center;">Inicio de sesion</h1>
            </div>
            <div class="form-group">
                <label for="user">Usuario</label>
                <input autofocus type="text" id="user" name="user" class="form-control">
            </div>
            <div class="form-group">
                <label for="pass">Contraseña</label>
                <input type="password" name="contraseña" id="pass" class="form-control">
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Iniciar Sesion">
            </div>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>