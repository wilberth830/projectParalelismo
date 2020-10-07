<?php 
    $nombre=$_POST['nombres'];
    $apellido=$_POST['apellidos'];
    $email=$_POST['email'];
    $nomcuenta=$_POST['nomCuenta'];
    $clave1=md5($_POST['clave']);
    
    $clave2=$_POST['claveConf'];

    $consulta=$pdo->prepare("INSERT INTO usuario(NombreCuenta,Nombres,Apellidos,Email,Clave) VALUE(:nomcuenta,:nombres,:apellidos,:email,:clave)");

    $consulta->bindParam(':nomcuenta',$nomcuenta);
    $consulta->bindParam(':nombres',$nombre);
    $consulta->bindParam(':apellidos',$apellido);
    $consulta->bindParam(':email',$email);
    $consulta->bindParam(':clave',$clave1);

    if($consulta->execute()){
        echo "Datos almacenados";
    }else {
        echo "ERROR!! No se guardaron los datos";
    }
?>