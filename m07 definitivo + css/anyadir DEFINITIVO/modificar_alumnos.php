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
    <link rel="stylesheet" type="text/css" href="css/modificar_alumnos.css">

    <title>Document</title>
</head>
<body>
<div class="cerrar_sesion"><a href="cerrar_sesion.php">cerrar sesion</a></div>
<h1>BIENVENIDO ADMINISTRADOR - AQUI PODRAS MODIFICAR UN ALUMNO!</h1>
  
<?php
//datos de la conexion a la base de datos
$IP ="192.168.12.164";
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
    ID_ALUMNO <input type="text" name="id_alumno" value=<?php echo $alumno['ID_CURSO'];?>><br>
    DNI <input type="text" name="dni" value=<?php echo $alumno['nombre'];?>><br>
    NOMBRE <input type ="text" name="nombre"><br>
    APELLIDO <input type ="text" name ="apellido" value=<?php echo $alumno['apellido'];?>>><br>
    FOTO <input type ="text" name ="foto"><br>
    CONTRASENYA <input type="text" name="contrasenya"><br>
    ENVIAR <input type="submit"><br>
        </form>
    </div>
    <div class="div6"><a href="cerrar_sesion.php">Cerrar sesión</a></div> 
    </div>







<?php
$SQL = "UPDATE ALUMNOS SET DNI='$DNI', NOMBRE='$NOMBRE',APELLIDO='$APELLIDO',FOTO='$FOTO',CONTRASENYA='$CONTRASENYA' WHERE ID_ALUMNO = $ID_ALUMNO";
    mysqli_query($CONEXION,$SQL);
    echo (mysqli_error($CONEXION));
    echo "hola";
if (mysqli_connect_errno()){
    echo "conexion no realizada :c";
}else{
}
//aqui lo que hacemos es recoger los datos del usuario..
//variable en la que guardamos la sentencia sql.
}else{
    echo "no validado!";
}
?>

<?php 

 ?>

</body>
</html> 


