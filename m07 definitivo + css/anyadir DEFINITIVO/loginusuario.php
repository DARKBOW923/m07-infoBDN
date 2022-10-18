<?php 
session_start();

if ($_POST){

    $DIRECCION ="192.168.12.164";
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
    $query = "select * from PROFESOR where DNI = '$NOMBRE' and CONTRASENYA= md5('$CONTRASENYA')";
    echo $query;
    $resultado = mysqli_query($CONEXION, $query);
   echo ' <meta http-equiv="Refresh" content="2; URL=ver_alumnos.php" />';
   
echo '<img src = "../img/spongebob.gif" alt = "bobesponja"/>';
    if (mysqli_num_rows($resultado) >0){
        echo "Usuario correcto";
        $_SESSION['rol'] = "Profesor"; 
        
    } 
    else{
        echo "usuario no encontrado o contrasenya incorrecta..";
    }
     
}
else{
//Dibujar el formulario

?>
 <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
  </head>
  <body>
      BIENVENIDO, AQUI PODRAS INICIAR SESION!
      <form method="post" action="loginusuario.php">
          USUARIO <input type="text" name="usuario"><br>
          CONTRASENYA <input type="text" name="contrasenya"><br>
          COnfirmar <input type="submit">
      </form>
  </body>
  </html>

  <?php
}
?>