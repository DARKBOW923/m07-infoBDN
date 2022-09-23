<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>BIENVENIDO ADMINISTRADOR - AQUI PODRAS MODIFICAR UN ALUMNO!</h1>
  
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
echo $alumno['NOMBRE'];
echo "asd";

?>



<form method="post">
    ID_ALUMNO <input type="text" name="id_alumno" value=<?php echo $alumno['ID_CURSO'];?>><br>
    DNI <input type="text" name="dni" value=<?php echo $alumno['nombre'];?>><br>
    NOMBRE <input type ="text" name="nombre"><br>
    APELLIDO <input type ="text" name ="apellido" value=<?php echo $alumno['apellido'];?>>><br>
    FOTO <input type ="text" name ="foto"><br>
    CONTRASENYA <input type="text" name="contrasenya"><br>
    ENVIAR <input type="submit"><br>
</form>






<?php
$SQL = "UPDATE ALUMNOS SET DNI='$DNI', NOMBRE='$NOMBRE',APELLIDO='$APELLIDO',FOTO='$FOTO',CONTRASENYA='$CONTRASENYA' WHERE ID_ALUMNO = $ID_ALUMNO";
    mysqli_query($CONEXION,$SQL);
    echo (mysqli_error($CONEXION));
    echo "hola";
if (mysqli_connect_errno()){
    echo "conexion no realizada :c";
}else{
}


?>

<?php 

 ?>

</body>
</html> 


