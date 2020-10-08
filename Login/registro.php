<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
  
  <div class="img-login">
    <header class="class-header">
      <div class="header-nav contenedor">
      <a href="../index.php"><img src="img/logo2.png" alt=""></a>
      </div>      
    </header>

      <div class="formulario">
        <div class="contenedor cont-form">
          <div class="class-login form-registro">
            <h3>Registrarse</h3>
            <form action="" method="POST">
              <label for="nombres">Nombres</label>
              <input id="nombres" name="nombres" type="text" placeholder="Nombres" required>
              <label for="apellidos">Apellidos</label>
              <input id="apellidos" name="apellidos" type="text" placeholder="Apellidos" required>
              <label for="email">Email</label>
              <input id="email" name="email" type="email" placeholder="Email" required>
              <label for="nomCuenta">Nombre de Cuenta</label>
              <input id="nomCuenta" name="nomCuenta" type="text" placeholder="Nombre de cuenta" required>
              <label for="clave">Contraseña</label>
              <input id="clave" name="clave" type="password" placeholder="Contraseña" required="">
              <label for="claveConf">Confirmar contraseña</label>
              <input id="claveConf" name="claveConf" type="password" placeholder="Confirmar contraseña" required="">
              <div class="clas-btn">
                <input type="submit" value="Guardar" class="btn-form">           
              </div> 
            </form><!--formr-->
            <?php 
                if(isset($_POST['nombres'])&&isset($_POST['apellidos'])&&isset($_POST['email'])&&isset($_POST['nomCuenta'])&&isset($_POST['clave'])&&isset($_POST['claveConf'])){
                    require_once "Conexion/conexionBD.php";
                    require_once "Procesos/guardar.php";
                }
            ?>
          </div>
        </div>        
      </div>
    </div>

    <footer class="par-footer">
    <p>&copy; Casual Food todos los derechos reservados - 2020</p>
    </footer>

  

</body>
</html>
