<?php
session_start();
if(isset($_SESSION['rol']) && $_SESSION['tipo'] == "ADMINISTRADOR"){
    echo $_SESSION['rol'];
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

<h1>BIENVENIDO ADMINISTRADOR - AQUI PODRAS ELIMINAR UN ALUMNO!</h1>
  
<?php
//datos de la conexion a la base de datos
$IP = "192.168.1.38";
$BASE_DATOS = "infoBDN";
$USUARIO="administrador";
$PASSWD ="1234";
//variable donde guardamos dichos datos
$CONEXION = mysqli_connect($IP,$USUARIO,$PASSWD,$BASE_DATOS);
//comprobacion de que hemos puesto bien los datos y ademas de que se conecta a la bbdd
$ID_ALUMNO =$_GET["ID_ALUMNO"];


$QUERY= "SELECT * FROM ALUMNOS WHERE ID_ALUMNO = '".$_GET['ID_ALUMNO']."'";


?>







<?php
//errores del mysql
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$SQL = "UPDATE ALUMNOS SET DESACTIVAR = 'si' WHERE ID_ALUMNO = $ID_ALUMNO";
//$SQL = "DELETE FROM CURSO WHERE NOMBRE = '{$NOMBRE}'";
echo $SQL;
    mysqli_query($CONEXION,$SQL);
   
if (mysqli_connect_errno()){
    echo "conexion no realizada :c";
}else{
}

echo ' <meta http-equiv="Refresh" content="2; URL=ver_alumnos.php" />';
//echo '<img src = "../img/spongebob.gif" alt = "bongocat"/>';

   
  
//aqui lo que hacemos es recoger los datos del usuario..
//variable en la que guardamos la sentencia sql.
}else{
    echo "no validado!";
}
?>

</body>
</html> 


