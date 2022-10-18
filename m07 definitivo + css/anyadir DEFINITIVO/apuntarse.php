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
    <link rel="stylesheet" type="text/css" href="css/administrador.css">

    <title>Document</title>
</head>
<body>

<h1>BIENVENIDO ADMINISTRADOR - AQUI PODRAS MODIFICAR UN ALUMNO!</h1>
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
$DNI =$_POST["alumno_dni"];
$NOMBRE =$_POST["nombre"];
$APELLIDO =$_POST["apellido"];
$FOTO =$_POST["foto"];
$DUMP = $_SESSION['rol'];
$CONTRASENYA=$_POST["contrasenya"];
$QUERY= "SELECT * FROM CURSO WHERE ID_CURSO = '".$_GET['ID_CURSO']."'";
$pepe = $alumno['ID_CURSO'];
$QUERY4 = "SELECT F_INICIO,F_FINAL FROM CURSO WHERE ID_CURSO = '{$pepe}'";
mysqli_query($CONEXION,$QUERY4);
//echo "$QUERY4";
//$alumno1 = mysqli_fetch_assoc($result1);
$result = mysqli_query($CONEXION,$QUERY);
$alumno = mysqli_fetch_assoc($result);
echo $alumno['F_INICIO'];
echo $alumno['F_FINAL'];


//echo $alumno['NOMBRE'];

?>
<div class="parent">
<div class="div1"> e</div>
<div class="div2"> <a href="dashboard_alumno.php">Inicio alumno</a></div>
<div class="div3"> LOGO</div>
<div class="div4"> COPYRIGHT CURSOS ESPAÑA</div>
<div class="div5"><form method="post">
<form method="post">
    ID_CURSO <input type="text" name="id_alumno" value=<?php echo $alumno['ID_CURSO'];?>><br>
    ID_ALUMNO <input type="text" name="alumno_dni" value=<?php echo $DUMP?>><br>
    F_INICIO <input type="date" name="f_inicio" value=<?php echo $alumno['F_INICIO'];?>><br>
    F_FINAL <input type="date" name="f_final" value=<?php echo $alumno['F_FINAL'];?>><br>
    ENVIAR <input type="submit"><br>
</form>
</form></div>
<div class="div6"><a href="cerrar_sesion.php">Cerrar sesión</a></div> 
</div>

</div> 








</body>
</html> 
<?php



    $SQL = "INSERT INTO MATRICULA (ID_ALUMNO,ID_CURSO) VALUES ('{$DNI}',$ID_ALUMNO)";
    mysqli_query($CONEXION,$SQL);
    echo (mysqli_error($CONEXION));
    echo "hola";
if (mysqli_connect_errno()){
    echo "conexion no realizada :c";
}else{
}
}else{
    echo "pepito :c";
}

//echo $SQL;
//aqui lo que hacemos es recoger los datos del usuario..
//variable en la que guardamos la sentencia sql.

?>

<?php 

 ?>



