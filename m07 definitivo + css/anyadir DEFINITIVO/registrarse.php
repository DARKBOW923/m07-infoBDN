<?php
session_start();

$USUARIO = "administrador";
$CONTRASENYA= "1234";
$BBDD= "infoBDN";
$IP = "192.168.12.164";
$CONEXION = mysqli_connect($IP,$USUARIO,$CONTRASENYA,$BBDD,);
$ID_ALUMNO=$_POST['id_alumno'];
$NOMBRE=$_POST['nombre'];
$APELLIDO=$_POST['apellidos'];
$DNI=$_POST['dni'];
$CONTRASENYA=$_POST['contrasenya'];
$CORREO=$_POST['correo'];
$FOTO=$_POST['foto'];
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

    
<div class="parent">
    <div class="div1"> e</div>
    <div class="div3"> LOGO</div>
    <div class="div4"> COPYRIGHT CURSOS ESPAÑA</div>
    
    <div class="div5">
    <form method ="post" action="registrarse.php">
                ID USUARIO <input type="text" name ="id_alumno"><br>
                NOMBRE <input type="text" name="nombre"><br>
                APELLIDOS <input type ="text" name="apellidos"><br>
                DNI <input type="text" name="dni"><br>
                CONTRASENYA <input type ="text" name="contrasenya"><br>
                foto <input type="text" name="foto"><br>
                correo <input type="text" name="correo"><br>
                submit <input type="submit" name ="button"><br>
            </form>
</div>
<div class="div6"><a href="cerrar_sesion.php">Cerrar sesión</a></div> 
        </form>
    </div>
    
    </div>
</body>
</html>
<?php
$QUERY="INSERT INTO ALUMNOS (ID_ALUMNO,DNI,NOMBRE,APELLIDO,FOTO,CONTRASENYA,CORREO, DESACTIVAR) VALUES ($ID_ALUMNO, '{$DNI}','{$NOMBRE}','{$APELLIDO}','{$FOTO}',md5('{$CONTRASENYA}'),'{$CORREO}', 'false')";
$_SESSION['rol'] = $ID_ALUMNO; 
mysqli_query($CONEXION,$QUERY);

$_SESSION['rol'] =$_POST['id_alumno'];
$_SESSION['tipo'] ="AL";

echo "<p>registro exitoso, serás redirigido en 3 segundos..</p>";
echo ' <meta http-equiv="Refresh" content="3; URL=dashboard_alumno.php" />';
   ?>

