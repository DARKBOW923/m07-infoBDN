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
    <link rel="stylesheet" type="text/css" href="css/anyadir_cursos.css">

    <title>Document</title>
</head>
<body>
<div class="parent">
<div class="div1"> e</div>
<div class="div2"> <a href="curso.php"> **VER** CURSOS></a><br>
        <a href="buscar_profesores.php">  **VER** PROFESORES.></a><br>
        <a href="anyadir_cursos.php"> **ANYADIR** CURSOS.></a><br>
        <a href="alumnos.php"> **ANYADIR** ALUMNOS.></a><br>
       <a href="anyadir_profesor.php">  **ANYADIR** PROFESOR.></a><br>
       <a href="ver_alumnos.php"> **VER** ALUMNOS.></a><br></div>
<div class="div3"> LOGO</div>
<div class="div4"> COPYRIGHT CURSOS ESPAÑA</div>
<div class="div5"><form method="post">
    ID CURSO <input type="text" name="id_curso" required><br>
    NOMBRE <input type="text" name="nombre"><br>
    DESCRIPCION <input type ="text" name="descripcion"><br>
    HORAS <input type ="text" name ="horas"><br>
    F_INICIO <input type ="date" name ="f_inicio"><br>
    F_FINAL <input type="date" name="f_final"><br>
    PROFESOR <input type ="text" name ="profesor"><br>
    ENVIAR <input type="submit">
</form></div>
<div class="div6"><a href="cerrar_sesion.php">Cerrar sesión</a></div> 
</div>

</div> 

<?php

//datos de la conexion a la base de datos
$IP = "192.168.12.164";
$BASE_DATOS = "infoBDN";
$USUARIO="administrador";
$CONTRASENYA ="1234";
//variable donde guardamos dichos datos
$CONEXION = mysqli_connect($IP,$USUARIO,$CONTRASENYA,$BASE_DATOS);
//comprobacion de que hemos puesto bien los datos y ademas de que se conecta a la bbdd
$ID_CURSO =$_POST["id_curso"];
$NOMBRE =$_POST["nombre"];
$DESCRIPCION =$_POST["descripcion"];
$HORAS =$_POST["horas"];
$F_INICIO =$_POST["f_inicio"];
$F_FINAL=$_POST["f_final"];
$PROFESOR=$_POST["profesor"];


    if (mysqli_connect_errno()){
        echo "conexion no realizada :c";
    }else{
    }
//aqui lo que hacemos es recoger los datos del usuario..
//variable en la que guardamos la sentencia sql.
//$SQL = "INSERT INTO CURSO (ID_CURSO,NOMBRE,DESCRIPCION,HORAS,F_INICIO,F_FINAL,PROFESOR) VALUES ('$ID_CURSO','$NOMBRE','$DESCRIPCION',$HORAS,'$F_INICIO','$F_FINAL','$PROFESOR')";
//$PEPO =mysqli_query($CONEXION,$BUSCADOR);

if ($F_INICIO > $F_FINAL){
    echo "Error, no se ha podido establecer la fecha, causa del error: La fecha introducida de inicio es mayor que la fecha final";
}else{
    $SQL = "INSERT INTO CURSO (ID_CURSO,NOMBRE,DESCRIPCION,HORAS,F_INICIO,F_FINAL,PROFESOR,DISPONIBLE) VALUES ('$ID_CURSO','$NOMBRE','$DESCRIPCION',$HORAS,'$F_INICIO','$F_FINAL','$PROFESOR', 'si')";
    mysqli_query($CONEXION,$SQL);
    echo "Curso añadido! Serás redirigido en 3 segundos..";
    echo ' <meta http-equiv="Refresh" content="3; URL=curso.php" />
    ';

}
}else{
    echo "no balidadoh >:c";
}
?>
</body>
</html>