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
$DNI =$_POST["dni"];
$APELLIDO =$_POST["apellido"];
$T_ACADEMICO =$_POST["t_academico"];
$FOTO =$_POST["foto"];
$CONTRASENYA =$_POST["contrasenya"];
$CURSO_IMPARTIDO=$_POST["curso_impartido"];
$NOMBRE=$_POST["nombre"];
$DESACTIVAR=$_POST["desactivar"];

$QUERY= "SELECT * FROM PROFESOR WHERE DNI = '".$_GET['DNI']."'";


$result = mysqli_query($CONEXION,$QUERY);

$profesor = mysqli_fetch_assoc($result);
echo $profesor['DNI'];
echo $profesor['NOMBRE'];
?>



<form method="post">  
    DNI <input type ="text" name="dni" readonly="readonly" value="<?php echo $profesor['DNI'];?>"><br>
    APELLIDO <input type="text"  name ="apellido" value="<?php echo $profesor['APELLIDOS'];?>"><br> 
    T_ACADEMICO <input type="text"  name="t_academico"value="<?php echo $profesor['T_ACADEMICO'];?>"><br> 
    FOTO <input type="text"  name="foto"value="<?php echo $profesor['FOTO'];?>"><br> 
    CONTRASENYA <input type="text" name="contrasenya" value="<?php echo $profesor['CONTRASENYA'];?>"><br> 
    CURSO_IMPARTIDO <input type="text" name="curso_impartido" value="<?php echo $profesor['CURSO_IMPARTIDO'];?>"><br> 
    NOMBRE <input type="text" name="nombre" value="<?php echo $profesor['NOMBRE'];?>"><br> 
    DESACTIVAR? <input type="text" name="desactivar" value="<?php echo $profesor['DESACTIVAR'];?>"><br> 
    EDITAR CAMPO(S) <input type="submit"><br>
</form>






<?php
//errores del mysql
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$SQL = "UPDATE PROFESOR SET  APELLIDOS ='{$APELLIDO}', T_ACADEMICO='{$T_ACADEMICO}',FOTO = '{$FOTO}', CONTRASENYA=md5('{$CONTRASENYA}'), CURSO_IMPARTIDO='{$CURSO_IMPARTIDO}', NOMBRE='{$NOMBRE}', DESACTIVAR='{$DESACTIVAR}' WHERE DNI='{$DNI}'";

//$SQL = "DELETE FROM CURSO WHERE NOMBRE = '{$NOMBRE}'";
echo $SQL;
    mysqli_query($CONEXION,$SQL);
   
    echo "hola";
if (mysqli_connect_errno()){
    echo "conexion no realizada :c";
}else{
}

  
   
  
//aqui lo que hacemos es recoger los datos del usuario..
//variable en la que guardamos la sentencia sql.

?>

<?php 

 ?>

</body>
</html> 


