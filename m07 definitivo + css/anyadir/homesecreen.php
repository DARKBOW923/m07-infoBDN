<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos paco</title>
</head>
<body>
<div class="cerrar_sesion"><a href="cerrar_sesion.php">cerrar sesion</a></div>
    <div class="homescreen_h1">

    <h1>Bienvenido a cursos paco! Los MEJORES cursos de toda españa!</h1>
    <div class="homescreen_class_flex">
        </body>
        
</html><?php
//datos de la conexion a la base de datos
$IP= "192.168.1.38";
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
        
    }
//aqui lo que hacemos es recoger los datos del usuario..
//variable en la que guardamos la sentencia sql.
$BUSCADOR = "SELECT * FROM CURSO WHERE NOMBRE LIKE '%$BUSCAR%'";
//$PEPO =mysqli_query($CONEXION,$BUSCADOR);
$PEPO =mysqli_query($CONEXION,$BUSCADOR);
echo '<div class=flex2>';
echo '<table border = 1px solid black class= flex2>';
echo '

    <th> NOMBRE</th>
    <th>DESCRIPCION</th> 
    <th> HORAS </th> 
    <th> F_INICIO</th>
    <th> F_FINAL </th>
    <th> PROFESOR</th>
    <th> SABER MAS</th>


';
    
        
        while ( $fila = mysqli_fetch_array($PEPO) ) {
       echo '
            <tr>  
                
                <td>' . $fila['NOMBRE'] . '</td>
                <td>' . $fila['DESCRIPCION'] . '</td>
                <td>' . $fila['HORAS']. '</td>
                <td>' . $fila['F_INICIO']. '</td>
                <td>' . $fila['F_FINAL'] . '</td>
                <td>' . $fila['PROFESOR']. '</td>
                <td><a href="apuntarse.php?ID_CURSO='.$fila['ID_CURSO'].'">saber mas</a></td>
                <img src="5.png" alt="image is not available">
               
            </tr>';
            
        }
        echo '</table>';
        echo '</div>';
        echo '</div>';
        
     
