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
$BUSCADOR = "SELECT * FROM CURSO WHERE NOMBRE LIKE '%$BUSCAR%'";
$DUMP = "SELECT * FROM CURSO";
//$PEPO =mysqli_query($CONEXION,$BUSCADOR);
$PEPO =mysqli_query($CONEXION,$BUSCADOR);
echo '<table border = 1px solid black>';
echo '

    <th>ID_CURSO</th>
    <th> NOMBRE</th>
    <th>DESCRIPCION</th> 
    <th> HORAS </th> 
    <th> F_INICIO</th>
    <th> F_FINAL </th>
    <th> PROFESOR</th>

    <th> ELIMINAR</th>

';
    
        
        while ( $fila = mysqli_fetch_array($PEPO) ) {
       echo '
            <tr>  
                <td>' . $fila['ID_CURSO'].'</td>
                <td>' .$fila['NOMBRE'] . '</td>
                <td>' . $fila['DESCRIPCION'] . '</td>
                <td>' . $fila['HORAS']. '</td>
                <td>' . $fila['F_INICIO']. '</td>
                <td>' . $fila['F_FINAL'] . '</td>
                <td>' . $fila['PROFESOR']. '</td>
                <td><a href="modificar_cursos.php?ID_CURSO='.$fila['ID_CURSO']. '">editar</a></td>
                <td><a href="eliminar_curso.php?ID_CURSO='.$fila['ID_CURSO']. '">eliminar</a></td>
            </tr>';
            
        }
        echo '</table>';
      
    
  

?>
</body>
</html>