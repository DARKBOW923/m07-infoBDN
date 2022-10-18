<?php
session_start();
if(isset($_SESSION['rol']) && $_SESSION['tipo']=="P"){
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


  
<?php
//datos de la conexion a la base de datos
$IP= "192.168.12.164";
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
$ID_CURSO = $_POST['id_curso'];
$NOTA = $_POST['nota'];
$QUERY= "SELECT MATRICULA.ID_CURSO,MATRICULA.ID_ALUMNO,ALUMNOS.NOMBRE,ALUMNOS.DNI,ALUMNOS.APELLIDO,ALUMNOS.ID_ALUMNO FROM MATRICULA,ALUMNOS WHERE ALUMNOS.ID_ALUMNO = '".$_GET['ID_ALUMNO']."'";
//$QUERY2 ="SELECT CURSO.NOMBRE,CURSO.ID_CURSO,PROFESOR.NOMBRE,CURSO.PROFESOR FROM CURSO,PROFESOR WHERE PROFESOR.DNI = '12345F' AND CURSO.PROFESOR = '12345F'";
$result = mysqli_query($CONEXION,$QUERY);

$alumno = mysqli_fetch_assoc($result);


?>
<div class="parent">
    <div class="div1"> e</div>
    <div class="div2"> <a href="dashboard_profesor.php">Volver atras</a></div>
    <div class="div3"> LOGO</div>
    <div class="div4"> COPYRIGHT CURSOS ESPAÑA</div>
    <div class="div5">
    <form method="post">
    <form method="post">
    ID_ALUMNO <input type="text" name="id_alumno"  readonly="readonly"<?php echo $alumno['ID_ALUMNO'];?>"><br>    
    DNI <input type ="text" name="dni"  value="<?php echo $alumno['DNI'];?>"><br>
    NOMBRE <input type="text"  name ="nombre" value="<?php echo $alumno['NOMBRE'];?>"><br> 
    APELLIDOS <input type="text"  name="apellido"value="<?php echo $alumno['APELLIDO'];?>"><br> 
    NOTA <input type="text"  name="nota"><br> 
    ID_CURSO <input type="text"  name="id_curso"value="<?php echo $alumno['ID_CURSO'];?>"><br> 
    ENVIAR <input type="submit"><br>
</form>
        </form>
    </div>
    <div class="div6"><a href="cerrar_sesion.php">Cerrar sesión</a></div> 









<?php
if ($NOTA < 0 || $NOTA > 10){
    echo "no se puede poner esta nota!!!";
}else{
    $SQL = "UPDATE MATRICULA SET CALIFICACIONES = $NOTA WHERE ID_ALUMNO = $ID_ALUMNO AND ID_CURSO = '{$ID_CURSO}'";
    mysqli_query($CONEXION,$SQL);
    echo (mysqli_error($CONEXION));
    echo "hola";
    echo $SQL;
    
}

if (mysqli_connect_errno()){
    echo "conexion no realizada :c";
}else{
}
//SELECT MATRICULA.ID_CURSO,ALUMNOS.ID_ALUMNO,PROFESOR.CURSO_IMPARTIDO,PROFESOR.NOMBRE FROM MATRICULA,ALUMNOS,PROFESOR WHERE PROFESOR.CURSO_IMPARTIDO = '2' AND  MATRICULA.ID_ALUMNO = ALUMNOS.ID_ALUMNO AND MATRICULA.ID_CURSO = '2';
//aqui lo que hacemos es recoger los datos del usuario..
//variable en la que guardamos la sentencia sql.

?>

<?php 
}
 ?>

</body>
</html> 


