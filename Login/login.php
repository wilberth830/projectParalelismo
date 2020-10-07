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
      <a href="../index.php"><img src="img/logo1.png" alt=""></a>
      </div>
      
    </header>
      <div class="formulario">
        <div class="contenedor cont-form">
          <div class="class-login">
            <h3>Iniciar Sesion</h3>
            <form action="" method="POST">
              <label for="nomCuenta">Nombre de Cuenta</label>
              <input id="nomCuenta" name="nomCuenta" type="text" placeholder="Nombre de cuenta" require>
              <label for="clave">Contraseña</label>
              <input id="clave" name="clave" type="password" placeholder="Contraseña" require>
              <p>No tengo cuenta <a href="registro.php">Registrarse</a></p>
              <div class="clas-btn">
                <input type="submit" value="Enviar" class="btn-form">           
              </div> 
            </form>
          </div>
        </div>        
      </div>
    </div>



  

</body>
</html>
