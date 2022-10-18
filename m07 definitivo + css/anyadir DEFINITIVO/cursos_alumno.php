<?php
session_start();
if(isset($_SESSION['rol']) && $_SESSION['tipo']=="AL"){
    echo $_SESSION['rol'];

    $IP = "192.168.12.164";
    $BASE_DATOS = "infoBDN";
    $USUARIO="administrador";
    $CONTRASENYA ="1234";
    $BUSCAR = $_POST['buscar'];
    //variable donde guardamos dichos datos
    $CONEXION = mysqli_connect($IP,$USUARIO,$CONTRASENYA,$BASE_DATOS);
    $DUMP = $_SESSION['rol'];
echo "BIENVENIDO dhhddhhdhdhdh$DUMP";
$BUSCADOR = "SELECT * FROM CURSO WHERE NOMBRE LIKE '%$BUSCAR%' AND DISPONIBLE ='si'";
//$PEPO =mysqli_query($CONEXION,$BUSCADOR);
$PEPO =mysqli_query($CONEXION,$BUSCADOR);
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/curso.css">

        <title>Document</title>
    </head>
    <body>
    <div class="parent">
    <div class="div1"> LOGO</div>
    <div class="div2"> <a href="dashboard_alumno.php">Inicio alumno</a></div>
    <div class="div3"> LOGO</div>
    <div class="div4"> COPYRIGHT CURSOS ESPAÑA</div>
    <div class="div5">
    <form method="post">
    buscar <input type="text" name="buscar">
    ENVIAR <input type="submit">
</form>
   <?php echo '<table border = 1px solid black>';
echo '

    <th>ID_CURSO</th>
    <th> NOMBRE</th>
    <th>DESCRIPCION</th> 
    <th> HORAS </th> 
    <th> F_INICIO</th>
    <th> F_FINAL </th>
    <th> PROFESOR</th>
    <th> EDITAR</th>
    <th> ELIMINAR</th>

';
    
        
        while ( $fila = mysqli_fetch_array($PEPO) ) {
       echo '
            <tr>  
                <td>' . $fila['ID_CURSO'].'</td>
                <td>' . $fila['NOMBRE'] . '</td>
                <td>' . $fila['DESCRIPCION'] . '</td>
                <td>' . $fila['HORAS']. '</td>
                <td>' . $fila['F_INICIO']. '</td>
                <td>' . $fila['F_FINAL'] . '</td>
                <td>' . $fila['PROFESOR']. '</td>
                <td><a href="apuntarse.php?ID_CURSO='.$fila['ID_CURSO'].'">apuntarse</a></td>
                <td><a href="borrarse.php?ID_CURSO='.$fila['ID_CURSO'].'">borrarse</a></td>
            </tr>';
            
        }
        echo '</table>';
        ?>
    <form method="post">
      
        </form>
    </div>
    <div class="div6"><a href="cerrar_sesion.php">Cerrar sesión</a></div> 
    </div>
    
<div class="cerrar_sesion"><a href="cerrar_sesion_alumnos.php">cerrar sesion</a></div>
<?php
echo "hola!";
//datos de la conexion a la base de datos

//comprobacion de que hemos puesto bien los datos y ademas de que se conecta a la bbdd


    if (mysqli_connect_errno()){
        echo "conexion no realizada :c";
    }else{
        echo "BIENVENIDO :D";
    }
//aqui lo que hacemos es recoger los datos del usuario..
//variable en la que guardamos la sentencia sql.


      
    
  
    //APUNTARSE AL CURSO INSERT INTO MATRICULA (ID_ALUMNO,ID_CURSO,CALIFICACIONES) VALUES (1998,'098',2)
    //PONER NOTA UPDATE MATRICULA  SET CALIFICACIONES = 3 WHERE ID_ALUMNO = 1999;
    //LISTAR CURSOS QUE IMPARTEN LOS PROFES SELECT PROFESOR.DNI,PROFESOR.CURSO_IMPARTIDO,MATRICULA.ID_CURSO FROM PROFESOR,MATRICULA WHERE PROFESOR.CURSO_IMPARTIDO = MATRICULA.ID_CURSO;
    //ver los cursos que están impartiendo //SELECT PROFESOR.DNI,PROFESOR.CURSO_IMPARTIDO,MATRICULA.ID_CURSO,ALUMNOS.NOMBRE FROM PROFESOR,MATRICULA,ALUMNOS WHERE PROFESOR.CURSO_IMPARTIDO = MATRICULA.ID_CURSO;

    }else{
        echo "no validado";
    }
    
?>
</body>
</html>