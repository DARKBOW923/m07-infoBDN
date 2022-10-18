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
    <link rel="stylesheet" type="text/css" href="css/anyadir_profesor.css">

    <title>Document</title>
</head>
<body>
    <div class="parent">
<div class="div1"> e</div>
<div class="div2"> <a href="curso.php"> **VER** CURSOS></a><br>
        <a href="buscar_profesores.php">  **VER** PROFESORES.></a><br>
        <a href="anyadir_cursos.php"> **ANYADIR** CURSOS.></a><br>
        <a href="alumnos.php"> **ANYADIR** ALUMNOS.></a><br>
       <a href="anyadir_profesor.php">  **ANYADIR** PROFESOR.></a><br>
       <a href="ver_alumnos.php"> **VER** ALUMNOS.></a><br></div>
<div class="div3"> LOGO</div>
<div class="div4"> COPYRIGHT CURSOS ESPAÑA</div>
<div class="div5">
<form method="post">
        NOMBRE DEL PROFESOR <input type="text" name="nombre"><br>
        DNI <input type="text" name ="dni" required><br>
        APELLIDOS <input type="text" name="apellidos"><br>
        TITULO ACADEMICO <input type="text" name="titulo_academico"><br>
        FOTO <input type="text" name="foto"><br>
        CONTRASEÑA <input type="text" name="contrasenya"><br>
        COnfirmar <input type="submit">
    </form>
</div>
<div class="div6"><a href="cerrar_sesion.php">Cerrar sesión</a></div> 
</div>

</div> 
  
</body>
  </html>

    <?php
$IP = "192.168.12.164";
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
$NOMBRE=$_POST["nombre"];
//Eliminacion de un registro de la base de datos
$ID2 = $_POST["BORRAR"];
//Creamos una variable llamada $SQL para guardar la consulta SQL que vamos a hacer, en este caso es para añadir datos a la consulta.
$SQL = "INSERT INTO PROFESOR (DNI,APELLIDOS,T_ACADEMICO,FOTO,CONTRASENYA,NOMBRE,DESACTIVAR) VALUES ('$DNI','$APELLIDO','$T_ACADEMICO','$RUTA',md5('$CONTRASENYA'),'$NOMBRE', 'false')";
//$SQL3CURSO = "INSERT INTO CURSO"

if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}else{
  echo "conectado satisfactoriamente";
}
mysqli_query($CONEXION,$SQL);
  ?>
<?php
}
else{

}


?>








