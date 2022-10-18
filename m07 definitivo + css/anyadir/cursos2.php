<?php

session_start();


session_start();
if(isset($_SESSION['rol']) && $_SESSION['tipo'] == "ADMINISTRADOR"){
   
  $IP= "192.168.1.38";
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
$BUSCADOR = "SELECT * FROM PROFESOR WHERE NOMBRE LIKE '%$BUSCAR%' AND DESACTIVAR = 'false'";
?>
<!DOCTYPE html>
    <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="css/cursos2.css">

      <title>Document</title>
  </head>
  <body>
  <div class="parent">
    <div class="div1"> e</div>
    <div class="div2"> e</div>
    <div class="div3"> e</div>
    <div class="div4"> e</div>
    <div class="div5">
    <form method="post">
        BUSCAR <input type ="text" name="buscar"><br>
          COnfirmar <input type="submit"><br>
      </form>
    <?php
    echo '<table border = 1px solid black>';
    while ( $fila = mysqli_fetch_array($PEPO) ) {
        echo '
        <tr> 
            <td class="margin_tabla"> DNI</td> 
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
            <td><a href="modificar_profesor.php?DNI='.$fila['DNI']. '">editar</a></td>
            <td><a href="eliminar_profesor.php?DNI='.$fila['DNI']. '">eliminar</a></td>
           
        </tr>';
        
    }
    echo '</table>';
  

    ?>
    </div>
    <div class="div6"><a href="cerrar_sesion.php">Cerrar sesión</a></div> 
    </div>

      
  
      </body>
  </html>




<?php


//$PEPO =mysqli_query($CONEXION,$BUSCADOR);
$PEPO =mysqli_query($CONEXION,$BUSCADOR);

  ?>
  <?php

  
  
}else{
  echo "no validado";
}
  ?>

