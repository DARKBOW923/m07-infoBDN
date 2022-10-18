
<?php
session_start();
if(isset($_SESSION['rol']) && $_SESSION['tipo']=="ADMINISTRADOR"){
    echo $_SESSION['rol'];

    $NOMBRE = $_POST['usuario'];
    $CONTRASENYA=$_POST['contrasenya'];
    $DIRECCION = "192.168.12.164";
    $USUARIO2="administrador";
    $BBDD="infoBDN";
    $CONTRASENYA2="1234";
    $CONEXION = mysqli_connect($DIRECCION,$USUARIO2,$CONTRASENYA2,$BBDD);
    if (mysqli_connect_errno()){
      echo "Ha habido un problema, vuelve a intentarlo";
      die();
    }else {
    }
      ?>
      <div class="cerrar_sesion"><a href="cerrar_sesion.php">cerrar sesion</a></div>
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
    <div class="parent">
<div class="div1"> e</div>
<div class="div2"><a href="curso.php"> **VER** CURSOS></a><br>
        <a href="buscar_profesores.php">**VER** PROFESORES.></a><br>
        <a href="anyadir_cursos.php"> **ANYADIR** CURSOS.></a><br>
        <a href="alumnos.php"> **ANYADIR** ALUMNOS.></a><br>
       <a href="anyadir_profesor.php">  **ANYADIR** PROFESOR.></a><br>
       <a href="ver_alumnos.php"> **VER** ALUMNOS.></a><br></div>
<div class="div3"> LOGO</div>
<div class="div4">COPYRIGHT CURSOS PACO </div>
<div class="div5"> <a href="curso.php"> CLICK AQUI PARA IR **VER** CURSOS></a><br>
        <a href="buscar_profesores.php"> CLICK AQUI PARA IR **VER** PROFESORES.></a><br>
        <a href="anyadir_cursos.php"> CLICK AQUI PARA IR **ANYADIR** CURSOS.></a><br>
        <a href="alumnos.php"> CLICK AQUI PARA IR **ANYADIR** ALUMNOS.></a><br>
       <a href="anyadir_profesor.php"> CLICK AQUI PARA IR **ANYADIR** PROFESOR.></a><br>
       <a href="ver_alumnos.php"> CLICK AQUI PARA IR **VER** ALUMNOS.></a><br>
        </div> 
<div class="div6"><a href="cerrar_sesion.php">Cerrar sesión</a></div> 

</div> 
    </body>
    </html>
    <?php

    }else{
      echo "no validado";
    }

    ?>
    