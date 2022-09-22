<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        BIENVENIDO USUARIO, AQUI PODRAS *VER* TODOS LOS CURSOS Y BUSCAR rrrALGUNO.<br>
    <form method="post">
    buscar <input type="text" name="buscar">
    ENVIAR <input type="submit">
</form>
  
<?php
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
$BUSCADOR = "SELECT * FROM PROFESOR WHERE NOMBRE LIKE '%$BUSCAR%'";
//$PEPO =mysqli_query($CONEXION,$BUSCADOR);
$PEPO =mysqli_query($CONEXION,$BUSCADOR);
echo '<table border = 1px solid black>';
echo '

    <th>DNI</th>
    <th>APELLIDOS</th>
    <th>T_ACADEMICO</th> 
    <th>FOTO</th> 
    <th>CONTRASENYA</th>
    <th>CURSO_IMPARTIDO</th>
    <th>NOMBRE</th>
    <th>DESACTIVAR</th>


    <th> ELIMINAR</th>
    <th> EDITAR</th>

';
    
        
        while ( $fila = mysqli_fetch_array($PEPO) ) {
       echo '
            <tr>  
                <td>' . $fila['DNI'].'</td>
                <td>' . $fila['APELLIDOS'] . '</td>
                <td>' . $fila['T_ACADEMICO'] . '</td>
                <td>' . $fila['FOTO']. '</td>
                <td>' . $fila['CONTRASENYA']. '</td>
                <td>' . $fila['CURSO_IMPARTIDO'] . '</td>
                <td>' . $fila['NOMBRE']. '</td>
                <td>' . $fila['DESACTIVAR']. '</td>
                <td><a href="modificar_profesor.php?DNI='.$fila['DNI']. '">editar</a></td>
                <td><a href="eliminar_profesor.php?DNI='.$fila['DNI']. '">eliminar</a></td>
            </tr>';
            
        }
        echo '</table>';
      
    
  

?>
</body>
</html>