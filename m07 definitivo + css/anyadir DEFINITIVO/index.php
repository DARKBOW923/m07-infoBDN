
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
      <form method="post" action="index.php">
          USUARIO <input type="text" name="usuario"><br>
          CONTRASENYA <input type="text" name="contrasenya"><br>
          COnfirmar <input type="submit">
      </form>
  </body>
  </html>

  <?php
  session_start();

    $NOMBRE = $_POST['usuario'];
    $CONTRASENYA=$_POST['contrasenya'];
    $DIRECCION = "192.168.1.38";
    $USUARIO2="administrador";
    $BBDD="infoBDN";
    $CONTRASENYA2="1234";
    $CONEXION = mysqli_connect($DIRECCION,$USUARIO2,$CONTRASENYA2,$BBDD);
    if (mysqli_connect_errno()){
      echo "Ha habido un problema, vuelve a intentarlo";
      die();
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
      $usuario=$_POST["usuario"];
      $contrasenya=$_POST["contrasenya"];
      $query = "SELECT * FROM administrador where USUARIO = '{$usuario}' and CONTRASENYA= md5('{$contrasenya}')";
      $resultado = mysqli_query($CONEXION, $query);
      $row = mysqli_fetch_array($resultado);
      if ($row ["USUARIO"] == "'{$usuario}'"){
        echo "usuario";
      }else{
        echo "usuario no encontrado o contrasenya incorrecta..";
      }
    }
    $_SESSION['rol'] = $_POST=$usuario; 
   
    ?>




<?php





//mysqli_query($CONEXION2,$CONSULTA);

?>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    BIENVENIDO, AQUI PODRAS AÑADIR DATOS A UNA BASE DE DATOS
    <form method="post">
      <a href="curso.php">AÑADIR CURSO</a>
        NOMBRE DE LA TABLA <input type="text" name="tabla"><br>
        NOMBRE DEL PROFESOR <input type="text" name="nombre"><br>
        DNI <input type="text" name ="dni"><br>
        APELLIDOS <input type="text" name="apellidos"><br>
        TITULO ACADEMICO <input type="text" name="titulo_academico"><br>
        FOTO <input type="text" name="foto"><br>
        CONTRASEÑA <input type="text" name="contrasenya"><br>
        CURSO <input type="text" name="curso"><br>
        CAMPO 1 PARA CREAR Y 2 PARA BORRAR.<input type="text" name="CAMPO"><br>
        BORRAR (PONER DNI DEL PROFESOR)<input type="text" name="BORRAR"><br>
        COnfirmar <input type="submit">
    </form>
</body>
</html>
-->

<!--
#Datos de la conexion de la base de datos
$IP = "192.168.12.178";
$USUARIO = "administrador";
$PASSWD = "1234";
$BASE_DE_DATOS = "infoBDN";
$CAMPO = $_POST["CAMPO"];
#Recogemos esos datos y los metemos en la variable $CONEXION
$CONEXION = mysqli_connect($IP, $USUARIO, $PASSWD,$BASE_DE_DATOS);
//RECOGEMOS LOS DATOS DEL USUARIO
$DNI = $_POST["dni"];
$APELLIDO = $_POST["apellidos"];
$T_ACADEMICO = $_POST["titulo_academico"];
$RUTA = $_POST["foto"];
$CONTRASENYA = $_POST["contrasenya"];
$CURSO_IMPARTIDO = $_POST["curso"];
$NOMBRE=$_POST["nombre"];
//Eliminacion de un registro de la base de datos
$ID2 = $_POST["BORRAR"];
//Creamos una variable llamada $SQL para guardar la consulta SQL que vamos a hacer, en este caso es para añadir datos a la consulta.
$SQL = "INSERT INTO PROFESOR (DNI,APELLIDOS, T_ACADEMICO, FOTO,CONTRASENYA,CURSO_IMPARTIDO,NOMBRE) VALUES ('$DNI','$APELLIDO','$T_ACADEMICO','$RUTA',md5('$CONTRASENYA'),'$CURSO_IMPARTIDO','$NOMBRE')";
$SQL2BORRAR = "UPDATE PROFESOR SET DESACTIVAR = 'TRUE' WHERE DNI = '$ID2'";

//$SQL3CURSO = "INSERT INTO CURSO"
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}else{
echo "conectado satisfactoriamente";
}
//esta condicion lo que hace es que compruebe si el valor de campo es 1, en caso de que lo sea lo que hará será correr la consulta sql.
if ($CAMPO == 1){
  mysqli_query($CONEXION, $SQL);
  echo "<br>";
  echo "Se han anñadido los datos satisfactoriamente"; 
  }elseif($CAMPO ==  2){
   mysqli_query($CONEXION,$SQL2BORRAR);
   echo "<br>";
   echo "El profesor ha sido desactivado con exito";
  }
?>*/-->