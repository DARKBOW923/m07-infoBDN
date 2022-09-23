<!DOCTYPE html>
    <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
  </head>
  <body>
      BIENVENIDO, AQUI PODRAS **VER** A TODOS LOS PROFESORES QUE TIENES.
      <form method="post">
        BUSCAR <input type ="text" name="buscar"><br>
          COnfirmar <input type="submit"><br>
      </form>




<?php

$IP = "192.168.1.37";
$USUARIO = "administrador";
$PASSWD = "1234";
$BASE_DE_DATOS = "infoBDN";
#Recogemos esos datos y los metemos en la variable $CONEXION
$CONEXION = mysqli_connect($IP, $USUARIO, $PASSWD,$BASE_DE_DATOS);
//RECOGEMOS LOS DATOS DEL USUARIO

//Eliminacion de un registro de la base de datos
//Creamos una variable llamada $SQL para guardar la consulta SQL que vamos a hacer, en este caso es para añadir datos a la consulta.
$BUSCAR =$_POST['buscar'];
//$SQL3CURSO = "INSERT INTO CURSO"
$BUSCADOR = "SELECT * FROM PROFESOR WHERE NOMBRE LIKE '%$BUSCAR%' AND DESACTIVAR = 'true'";
//$PEPO =mysqli_query($CONEXION,$BUSCADOR);
$PEPO =mysqli_query($CONEXION,$BUSCADOR);

    
echo '<table border = 1px solid black>';
      //generamos la tabla con los datos que hemos obtenido
while ( $fila = mysqli_fetch_array($PEPO) ) {
    echo '
    <tr> 
        <td> DNI</td> 
        <td> APELLIDOS</td> 
        <td> T_ACADEMICO </td> 
        <td> FOTO </td>
        <td> CURSO_IMPARTIDO </td>
        <td> NOMBRE</td>
        <td> DESACTIVAR</td>
        <td> EDITAR</td>
        <td> ELIMINAR <td>
    </tr>
    <tr>  
        <td>' . $fila['DNI'] . '</td>
        <td>' . $fila['APELLIDOS'] . '</td>
        <td>' . $fila['T_ACADEMICO'] . '</td>
        <td>' . $fila['FOTO']. '</td>
        <td>' . $fila['CURSO_IMPARTIDO'] . '</td>
        <td>' . $fila['NOMBRE']. '</td>
        <td>' . $fila['DESACTIVAR']. '</td>
       
    </tr>';
    
}
echo '</table>';
  
  

  ?>



</body>
  </html>
