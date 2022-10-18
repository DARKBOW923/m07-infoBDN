<?php
session_start();
if(isset($_SESSION['rol']) && $_SESSION['tipo']=="AL"){
    echo $_SESSION['rol'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/borrarse.css">

    <title>Document</title>
</head>
<body>

<h1>BIENVENIDO ADMINISTRADOR - AQUI PODRAS MODIFICAR UN ALUMNO!</h1>
  
<?php
//datos de la conexion a la base de datos
$IP = "192.168.1.38";
$BASE_DATOS = "infoBDN";
$USUARIO="administrador";
$PASSWD ="1234";
//variable donde guardamos dichos datos
$CONEXION = mysqli_connect($IP,$USUARIO,$PASSWD,$BASE_DATOS);
//comprobacion de que hemos puesto bien los datos y ademas de que se conecta a la bbdd
$ID_ALUMNO =$_POST["id_alumno"];
$DNI =$_POST["alumno_dni"];
$NOMBRE =$_POST["nombre"];
$APELLIDO =$_POST["apellido"];
$FOTO =$_POST["foto"];
$CONTRASENYA=$_POST["contrasenya"];
$QUERY= "SELECT * FROM MATRICULA WHERE ID_CURSO = '".$_GET['ID_CURSO']."'";
$result = mysqli_query($CONEXION,$QUERY);
$alumno = mysqli_fetch_assoc($result);
echo $alumno['NOMBRE'];
echo "asd";
$DUMP = $_SESSION['rol'];
?>
<div class="parent">
    <div class="div1"> e</div>
    <div class="div2"> <a href="dashboard_alumno.php">Inicio alumno</a></div>
    <div class="div3"> LOGO</div>
    <div class="div4"> COPYRIGHT CURSOS ESPAÑA</div>
    <div class="div5">
    <form method="post">
    ID_ALUMNO <input type="text" name="id_alumno" value=<?php echo $alumno['ID_CURSO'];?>><br>
    DNI <input type="text" name="alumno_dni" value=<?php echo $DUMP;?>><br>
    ENVIAR <input type="submit">
        </form>
    </div>
    <div class="div6"><a href="cerrar_sesion.php">Cerrar sesión</a></div> 
    </div>
    
    </div> 
        <div class="cerrar_sesion"><a href="cerrar_sesion.php">cerrar sesion</a></div>

<?php

$SQL = "DELETE FROM MATRICULA WHERE ID_ALUMNO = $DNI AND ID_CURSO ='{$alumno['ID_CURSO']}'";
    mysqli_query($CONEXION,$SQL);
    echo (mysqli_error($CONEXION));
    echo "hola";
    echo "<p>registro exitoso, serás redirigido en 3 segundos..</p>";
echo ' <meta http-equiv="Refresh" content="3; URL=dashboard_alumno.php" />';
if (mysqli_connect_errno()){
    echo "conexion no realizada :c";
}else{
}
echo $SQL;
//aqui lo que hacemos es recoger los datos del usuario..
//variable en la que guardamos la sentencia sql.

?>

<?php 
}else{
echo "no balidadoh";
}
 ?>

</body>
</html> 


