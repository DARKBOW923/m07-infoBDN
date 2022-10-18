<?php 
session_start();
    $DIRECCION = "192.168.12.164";
    $USUARIO2="administrador";
    $BBDD="infoBDN";
    $CONTRASENYA2="1234";

    $NOMBRE = $_POST['usuario'];
    $CONTRASENYA=$_POST['contrasenya'];
    $CONEXION = mysqli_connect($DIRECCION,$USUARIO2,$CONTRASENYA2,$BBDD);
    if (mysqli_connect_errno()){
      echo "Ha habido un problema, vuelve a intentarlo";
      die();
    }
    error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 'On');
    $query = "SELECT * from ALUMNOS where ID_ALUMNO = '$NOMBRE' and CONTRASENYA= md5('$CONTRASENYA') AND DESACTIVAR = 'no'";
   
    $resultado = mysqli_query($CONEXION, $query);
    
    
    if (mysqli_num_rows($resultado) >0){
        echo "Usuario correcto";
        $_SESSION['rol'] = $_POST=$NOMBRE; 
        $_SESSION['tipo'] = "AL";
        
    } 
    else{
        echo "usuario no encontrado o contrasenya incorrecta..";
    }
     


//Dibujar el formulario
$resultado = mysqli_query($CONEXION, $query);

?>
 <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="css/login_alumno.css">
      <title>Document</title>
  </head>
  <body>
  <div class="parent">
    <div class="div1"></div>
    <div class="div3"> LOGO</div>
    <div class="div4"> COPYRIGHT CURSOS ESPAÑA</div>
    <div class="div5">
    <form method="post">
    USUARIO <input type="text" name="usuario"><br>
          CONTRASENYA <input type="password" name="contrasenya"><br>
          Iniciar sesión <input type="submit">
        </form>
    </div>
   
    </div>
  </body>
  </html>

  <?php

?>
