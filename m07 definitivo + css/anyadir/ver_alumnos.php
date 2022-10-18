<?php
session_start();
if(isset($_SESSION['rol']) && $_SESSION['tipo'] == "ADMINISTRADOR"){
    echo $_SESSION['rol'];
    
//datos de la conexion a la base de datos
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
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/modificar_alumnos.css">

        <title>Document</title>
    </head>
    <body>
    <div class="cerrar_sesion"><a href="cerrar_sesion.php">cerrar sesion</a></div>
        BIENVENIDO USUARIO, AQUI PODRAS *VER* A LOS ALUMNOS!.<br>
    
<div class="parent">
    <div class="div1"> e</div>
    <div class="div2"> <a href="curso.php">  **VER** CURSOS></a><br>
        <a href="buscar_profesores.php">  **VER** PROFESORES.></a><br>
        <a href="anyadir_cursos.php">  **ANYADIR** CURSOS.></a><br>
        <a href="alumnos.php">  **ANYADIR** ALUMNOS.></a><br>
       <a href="anyadir_profesor.php">  **ANYADIR** PROFESOR.></a><br>
       <a href="ver_alumnos.php">  **VER** ALUMNOS.></a><br></div>
    <div class="div3"> LOGO</div>
    <div class="div4"> COPYRIGHT CURSOS ESPAÑA</div>
    <div class="div5">
    <form method="post">
    buscar <input type="text" name="buscar">
    ENVIAR <input type="submit">
    
</form>
   <?php $BUSCADOR = "SELECT * FROM ALUMNOS WHERE ALUMNOS.ID_ALUMNO LIKE '%$BUSCAR%' AND DESACTIVAR = 'no'";
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
      
    
  
    }else{
        echo ("NO ESTAS VALIDADO!!!!");
        echo ' <meta http-equiv="Refresh" content="2; URL=loginusuario.php" />';
    }
    ?>
    </div>
    <div class="div6"><a href="cerrar_sesion.php">Cerrar sesión</a></div> 
    </div>
</body>
</html>  
<?php

//aqui lo que hacemos es recoger los datos del usuario..
//variable en la que guardamos la sentencia sql.



?>
