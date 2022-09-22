<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>BIENVENIDO ADMINISTRADOR - AQUI PODRAS AÑADIR UN ALUMNO!</h1>
  
<?php
//datos de la conexion a la base de datos
$IP = "192.168.1.37";
$BASE_DATOS = "infoBDN";
$USUARIO="administrador";
$PASSWD ="1234";
//variable donde guardamos dichos datos
$CONEXION = mysqli_connect($IP,$USUARIO,$PASSWD,$BASE_DATOS);
//comprobacion de que hemos puesto bien los datos y ademas de que se conecta a la bbdd
$ID_ALUMNO =$_POST["id_alumno"];
$DNI =$_POST["dni"];
$NOMBRE =$_POST["nombre"];
$APELLIDO =$_POST["apellido"];
$FOTO =$_POST["foto"];
$CONTRASENYA=$_POST["contrasenya"];

$QUERY= "SELECT * FROM ALUMNOS WHERE ID_ALUMNO = '".$_GET['ID_ALUMNO']."'";


$result = mysqli_query($CONEXION,$QUERY);

$alumno = mysqli_fetch_assoc($result);
echo $alumno['DNI'];
echo $alumno ['NOMBRE'];
?>



<form method="post">
    ID_ALUMNO <input type="text" name="id_alumno" readonly="readonly" value="<?php echo $alumno['ID_ALUMNO'];?>"><br>    
    DNI <input type ="text" name="dni" readonly="readonly" value="<?php echo $alumno['DNI'];?>"><br>
    NOMBRE <input type="text"  name ="nombre" value="<?php echo $alumno['NOMBRE'];?>"><br> 
    APELLIDO <input type="text"  name="apellido"value="<?php echo $alumno['APELLIDO'];?>"><br> 
    FOTO <input type="text" name="foto" value="<?php echo $alumno['FOTO'];?>"><br> 
    CONTRASENYA <input type="text" name="contrasenya" value="<?php echo $alumno['CONTRASENYA'];?>"><br> 
    EDITAR CAMPO(S) <input type="submit"><br>
</form>






<?php
//errores del mysql
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$SQL = "DELETE FROM ALUMNOS WHERE ID_ALUMNO = {$ID_ALUMNO}";
//$SQL = "DELETE FROM CURSO WHERE NOMBRE = '{$NOMBRE}'";
echo $SQL;
    mysqli_query($CONEXION,$SQL);
   
    echo "hola";
if (mysqli_connect_errno()){
    echo "conexion no realizada :c";
}else{
}

    header("Location: ver_alumnos.php"); 
    exit();
   
  
//aqui lo que hacemos es recoger los datos del usuario..
//variable en la que guardamos la sentencia sql.

?>

<?php 

 ?>

</body>
</html> 


