<?php
session_start();
if(isset($_SESSION['rol']) && $_SESSION['tipo']=="ADMINISTRADOR"){
    echo $_SESSION['rol'];
?>
<!DOCTYPE html>
    <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="css/buscar_buscar.css">

      <title>Document</title>
  </head>
  <body>
  <div class="parent">
    <div class="div1"> e</div>
    <div class="div2"> e</div>
    <div class="div3"> e</div>
    <div class="div4"> e</div>
    <div class="div5">
  
    <form method="post">
          NOMBRE DEL PROFESOR <input type="text" name="nombre"><br>
          DNI <input type="text" name ="dni"><br>
          APELLIDOS <input type="text" name="apellidos"><br>
          TITULO ACADEMICO <input type="text" name="titulo_academico"><br>
          FOTO <input type="text" name="foto"><br>
          CONTRASEÑA <input type="text" name="contrasenya"><br>
          CURSO <input type="text" name="curso"><br>
          COnfirmar <input type="submit">
      </form>
    
    </div>
    <div class="div6"><a href="cerrar_sesion.php">Cerrar sesión</a></div> 
    </div>
    
    </div>  
<?php
$IP = "192.168.1.38";
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
$SQL = "INSERT INTO PROFESOR VALUES ('$DNI','$APELLIDO','$T_ACADEMICO','$RUTA',md5('$CONTRASENYA'),'$CURSO_IMPARTIDO','$NOMBRE', 'false')";

//$SQL3CURSO = "INSERT INTO CURSO"
mysqli_query($CONEXION,$SQL);
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}else{
  echo "conectado satisfactoriamente";
}
}else{
  echo "no validado!!";
}
  ?>
</body>
  </html>


