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
    <title>Document</title>
</head>
<body>

<h1>BIENVENIDO ADMINISTRADOR - AQUI PODRAS ELIMINAR UN CURSO!</h1>
  
<?php
//datos de la conexion a la base de datos
$IP= "192.168.12.164";
$BASE_DATOS = "infoBDN";
$USUARIO="administrador";
$PASSWD ="1234";
//variable donde guardamos dichos datos
$CONEXION = mysqli_connect($IP,$USUARIO,$PASSWD,$BASE_DATOS);
//comprobacion de que hemos puesto bien los datos y ademas de que se conecta a la bbdd
$ID_CURSO =$_POST["id_curso"];
$NOMBRE =$_POST["nombre"];
$DESCRIPCION =$_POST["descripcion"];
$HORAS =$_POST["horas"];
$F_INICIO =$_POST["f_inicio"];
$F_FINAL=$_POST["f_final"];
$PROFESOR = $_POST["profesor"];
$CAMPO=$_POST['campo'];
$QUERY= "SELECT * FROM CURSO WHERE ID_CURSO = '".$_GET['ID_CURSO']."'";


$result = mysqli_query($CONEXION,$QUERY);

$curso = mysqli_fetch_assoc($result);
}
?>








<?php
//errores del mysql
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//$SQL = "UPDATE CURSO SET NOMBRE ='{$NOMBRE}', DESCRIPCION ='{$DESCRIPCION}', HORAS=$HORAS,F_INICIO = '{$F_INICIO}', F_FINAL='{$F_FINAL}', PROFESOR='{$PROFESOR}' WHERE ID_CURSO='{$ID_CURSO}'";
$SQL = "DELETE FROM CURSO WHERE NOMBRE = '{$NOMBRE}'";
echo $SQL;
    mysqli_query($CONEXION,$SQL);
   
    echo "Profesor eliminado!";
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


