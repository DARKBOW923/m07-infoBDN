<?php
session_start();
if(isset($_SESSION['rol']) && $_SESSION['tipo']=="ADMINISTRADOR"){
    echo $_SESSION['rol'];
?>
<?php
$IP= "192.168.1.38";
$BASE_DATOS = "infoBDN";
$USUARIO="administrador";
$CONTRASENYA ="1234";
$BUSCAR = $_POST['buscar'];
//variable donde guardamos dichos datos
$CONEXION = mysqli_connect($IP,$USUARIO,$CONTRASENYA,$BASE_DATOS);
if (mysqli_connect_errno()){
    echo "conexion no realizada :c";
}else{
    echo "BIENVENIDO :D";
}
$BUSCADOR = "SELECT * FROM PROFESOR WHERE NOMBRE LIKE '%$BUSCAR%' AND DESACTIVAR = 'false'";
//$PEPO =mysqli_query($CONEXION,$BUSCADOR);
$PEPO =mysqli_query($CONEXION,$BUSCADOR);
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/buscar_profesores.css">
        <title>Document</title>
    </head>
    <body>
        BIENVENIDO USUARIO, AQUI PODRAS *VER* TODOS LOS CURSOS Y BUSCAR ALGUNO.<br>
 
<div class="parent">
    <div class="div1"> e</div>
    <div class="div2"> <a href="curso.php">  **VER** CURSOS></a><br>
        <a href="buscar_profesores.php">  **VER** PROFESORES.></a><br>
        <a href="anyadir_cursos.php"> **ANYADIR** CURSOS.></a><br>
        <a href="alumnos.php">  **ANYADIR** ALUMNOS.></a><br>
       <a href="anyadir_profesor.php"> **ANYADIR** PROFESOR.></a><br>
       <a href="ver_alumnos.php">  **VER** ALUMNOS.></a><br></div>
    <div class="div3"> LOGO</div>
    <div class="div4"> COPYRIGHT CURSOS ESPAÑA</div>
    <div class="div5"> 
    <form method="post">
    buscar <input type="text" name="buscar">
    ENVIAR <input type="submit">
</form>
        <?php
    
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


      
    
    </div> 
    <div class="div6"><a href="cerrar_sesion.php">Cerrar sesión</a></div> 
</body>
</html>

  
   
<?php
}else{
echo "no estas validado :c";
}
?>
</div>
    
    </div>
<?php
//datos de la conexion a la base de datos

//aqui lo que hacemos es recoger los datos del usuario..
//variable en la que guardamos la sentencia sql.
?>
