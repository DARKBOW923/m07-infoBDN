<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        BIENVENIDO USUARIO, AQUI PODRAS *VER* A LOS ALUMNOS!.<br>
    <form method="post">
    buscar <input type="text" name="buscar">
    ENVIAR <input type="submit">
</form>
  
<?php
echo "hola!";
//datos de la conexion a la base de datos
$IP = "192.168.1.37";
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
//aqui lo que hacemos es recoger los datos del usuario..
//variable en la que guardamos la sentencia sql.
$BUSCADOR = "SELECT * FROM ALUMNOS WHERE NOMBRE LIKE '%$BUSCAR%'";
//$PEPO =mysqli_query($CONEXION,$BUSCADOR);
$PEPO =mysqli_query($CONEXION,$BUSCADOR);
echo '<table border = 1px solid black>';
echo '

    <th>ID_ALUMNO</th>
    <th> DNI</th>
    <th>NOMBRE</th> 
    <th> APELLIDO </th> 
    <th> FOTO</th>
    <th> CONTRASENYA </th>

';
    
        //generamos la tabla a partir de los resultados que obtenemos
        while ( $fila = mysqli_fetch_array($PEPO) ) {
       echo '
            <tr>  
                <td>' . $fila['ID_ALUMNO'].'</td>
                <td>' . $fila['DNI'] . '</td>
                <td>' . $fila['NOMBRE'] . '</td>
                <td>' . $fila['APELLIDO']. '</td>
                <td>' . $fila['FOTO']. '</td>
                <td>' . $fila['CONTRASENYA'] . '</td>
                <td><a href="editar_alumnos.php?ID_ALUMNO='.$fila['ID_ALUMNO']. '">editar</a></td>
                <td><a href="eliminar_alumnos.php?ID_ALUMNO='.$fila['ID_ALUMNO']. '">eliminar</a></td>
            </tr>';
            
        }
        echo '</table>';
      
    
  

?>
</body>
</html>
