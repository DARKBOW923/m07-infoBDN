<?php
session_start();
if(isset($_SESSION['rol']) && $_SESSION['tipo']=="P"){
  
    $IP = "192.168.1.38";
    $BASE_DATOS = "infoBDN";
    $USUARIO="administrador";
    $CONTRASENYA ="1234";
    $BUSCAR = $_POST['buscar'];
    //variable donde guardamos dichos datos
    $CONEXION = mysqli_connect($IP,$USUARIO,$CONTRASENYA,$BASE_DATOS);
    //comprobacion de que hemos puesto bien los datos y ademas de que se conecta a la bbdd
    
    
        if (mysqli_connect_errno()){
            echo "conexion no realizada :c";
        }else{
            echo "BIENVENIDO :D";
        }
        $USUARIO2 = $_SESSION['rol'];
    //aqui lo que hacemos es recoger los datos del usuario..
    //variable en la que guardamos la sentencia sql.
    //$BUSCADOR = "SELECT * FROM CURSO WHERE NOMBRE LIKE '%$BUSCAR%' AND DISPONIBLE = 'si'";
    $ID_PROFESOR = $_SESSION['rol'];
    $BUSCADOR ="SELECT  PROFESOR.DNI, CURSO.PROFESOR,CURSO.ID_CURSO,MATRICULA.ID_CURSO,ALUMNOS.ID_ALUMNO,CURSO.NOMBRE,MATRICULA.CALIFICACIONES,CURSO.F_INICIO,CURSO.F_FINAL,CURSO.HORAS,CURSO.DISPONIBLE FROM ALUMNOS,PROFESOR,CURSO,MATRICULA WHERE PROFESOR.DNI = '{$USUARIO2}' AND CURSO.PROFESOR = '{$USUARIO2}' AND CURSO.ID_CURSO = MATRICULA.ID_CURSO AND ALUMNOS.ID_ALUMNO = MATRICULA.ID_ALUMNO AND DISPONIBLE ='si' AND ALUMNOS.DESACTIVAR = 'no'";
    //$PEPO =mysqli_query($CONEXION,$BUSCADOR);
    //echo $USUARIO;
    $PEPO =mysqli_query($CONEXION,$BUSCADOR);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/dashboard_profesor.css">

    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        BIENVENIDO USUARIO, AQUI PODRAS *VER* TODOS LOS CURSOS Y BUSCAR ALGUNO.<br>
    
<div class="parent">
    <div class="div1"></div>
    <div class="div2"><a href="dashboard_profesor.php">Volver atras</a></td></div>
    <div class="div3">LOGO</div>
    <div class="div4"> COPYRIGHT CURSOS ESPAÑA</div>
    <div class="div5">
    <form method="post">
    BUSCAR <input type="text" name="buscar">
    ENVIAR <input type="submit">
</form>
        <?php
//datos de la conexion a la base de datos

echo '<table border = 1px solid black>';
echo '

    <th>ID_ALUMNO</th>
    <th> NOMBRE</th>
    <th>ID_CURSO</th> 
    <th> HORAS </th> 
    <th> F_INICIO</th>
    <th> F_FINAL </th>
    <th> CALIFICACIONES</th>

';
    
        
        while ( $fila = mysqli_fetch_array($PEPO) ) {
       echo '
            <tr>  
                <td>' . $fila['ID_ALUMNO'] . '</td>
                <td>' . $fila['NOMBRE'] . '</td>
                <td>' . $fila['ID_CURSO'] . '</td>
                <td>' . $fila['HORAS'] . '</td>
                <td>' . $fila['F_INICIO']. '</td>
                <td>' . $fila['F_FINAL']. '</td>
                <td>' . $fila['CALIFICACIONES']. '</td>
                <td><a href="calificaciones.php?ID_ALUMNO='.$fila['ID_ALUMNO'].'&ID_CURSO=">PONER NOTA</a></td>
            </tr>';
            
        }
        echo '</table>';
      ?>
    </div>
    <div class="div6"><a href="cerrar_sesion.php">Cerrar sesión</a></div> 
    </div>
<div class="cerrar_sesion"><a href="cerrar_sesion.php">cerrar sesion</a></div>
<?php

    
  
    //APUNTARSE AL CURSO INSERT INTO MATRICULA (ID_ALUMNO,ID_CURSO,CALIFICACIONES) VALUES (1998,'098',2)
    //PONER NOTA UPDATE MATRICULA  SET CALIFICACIONES = 3 WHERE ID_ALUMNO = 1999;
    //LISTAR CURSOS QUE IMPARTEN LOS PROFES SELECT PROFESOR.DNI,PROFESOR.CURSO_IMPARTIDO,MATRICULA.ID_CURSO FROM PROFESOR,MATRICULA WHERE PROFESOR.CURSO_IMPARTIDO = MATRICULA.ID_CURSO;
    //ver los cursos que están impartiendo //SELECT PROFESOR.DNI,PROFESOR.CURSO_IMPARTIDO,MATRICULA.ID_CURSO,ALUMNOS.NOMBRE FROM PROFESOR,MATRICULA,ALUMNOS WHERE PROFESOR.CURSO_IMPARTIDO = MATRICULA.ID_CURSO;
?>
<?php
}else{
    echo "no validado!!!!";
}
?>
</body>
</html>

<div class="cerrar_sesion"><a href="cerrar_sesion.php">cerrar sesion</a></div>
