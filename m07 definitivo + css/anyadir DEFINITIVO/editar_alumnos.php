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
    <link rel="stylesheet" type="text/css" href="css/anyadir_profesor.css">

    <title>Document</title>
</head>
<body>

<h1>BIENVENIDO ADMINISTRADOR - AQUI PODRAS EDITAR UN ALUMNO!</h1>
<div class="cerrar_sesion"><a href="cerrar_sesion.php">cerrar sesion</a></div>
<?php
//datos de la conexion a la base de datos
$IP = "192.168.12.164";
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

?>
<div class="parent">
    <div class="div1"> e</div>
    <div class="div2"> <a href="curso.php"> **VER** CURSOS></a><br>
        <a href="buscar_profesores.php">**VER** PROFESORES.></a><br>
        <a href="anyadir_cursos.php"> **ANYADIR** CURSOS.></a><br>
        <a href="alumnos.php"> **ANYADIR** ALUMNOS.></a><br>
       <a href="anyadir_profesor.php">  **ANYADIR** PROFESOR.></a><br>
       <a href="ver_alumnos.php"> **VER** ALUMNOS.></a><br></div></div>
    <div class="div3"> LOGO</div>
    <div class="div4"> COPYRIGHT CURSOS ESPAÑA</div>
    <div class="div5">
    <form method="post">
    ID_ALUMNO <input type="text" name="id_alumno" readonly="readonly" value="<?php echo $alumno['ID_ALUMNO'];?>"><br>    
    DNI <input type ="text" name="dni" readonly="readonly" value="<?php echo $alumno['DNI'];?>"><br>
    NOMBRE <input type="text"  name ="nombre" value="<?php echo $alumno['NOMBRE'];?>"><br> 
    APELLIDO <input type="text"  name="apellido"value="<?php echo $alumno['APELLIDO'];?>"><br> 
    FOTO <input type="text" name="foto" value="<?php echo $alumno['FOTO'];?>"><br> 
    CONTRASENYA <input type="text" name="contrasenya" value="<?php echo $alumno['CONTRASENYA'];?>"><br> 
    EDITAR CAMPO(S) <input type="submit"><br>
</form>
    </div>
    <div class="div6"><a href="cerrar_sesion.php">Cerrar sesión</a></div> 
    </div>









<?php
//errores del mysql

$SQL = "UPDATE ALUMNOS SET  NOMBRE ='{$NOMBRE}', APELLIDO='{$APELLIDO}',FOTO = '{$FOTO}', CONTRASENYA=md5('{$CONTRASENYA}') WHERE ID_ALUMNO={$ID_ALUMNO}";
//$SQL = "DELETE FROM CURSO WHERE NOMBRE = '{$NOMBRE}'";
echo $SQL;
mysqli_query($CONEXION,$SQL);
echo "Curso añadido! Serás redirigido en 3 segundos..";
echo ' <meta http-equiv="Refresh" content="3; URL=ver_alumnos.php" />
';
   
if (mysqli_connect_errno()){
    echo "conexion no realizada :c";
}else{
}

 
   
  
//aqui lo que hacemos es recoger los datos del usuario..
//variable en la que guardamos la sentencia sql.
}else{
echo "no validado";
}
?>

<?php 

 ?>

</body>
</html> 


