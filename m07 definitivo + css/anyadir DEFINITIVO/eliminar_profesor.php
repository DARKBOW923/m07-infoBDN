<?php
session_start();
if(isset($_SESSION['rol']) && $_SESSION['tipo'] == "ADMINISTRADOR"){
    echo $_SESSION['rol'];
    ?><?php
//datos de la conexion a la base de datos
$IP = "192.168.12.164";
$BASE_DATOS = "infoBDN";
$USUARIO="administrador";
$PASSWD ="1234";
//variable donde guardamos dichos datos
$CONEXION = mysqli_connect($IP,$USUARIO,$PASSWD,$BASE_DATOS);
//comprobacion de que hemos puesto bien los datos y ademas de que se conecta a la bbdd
$DNI =$_GET["DNI"];
?>
<?php
//errores del mysql
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$SQL = "UPDATE PROFESOR SET DESACTIVAR = 'true' WHERE DNI ='{$DNI}'";
//$SQL = "DELETE FROM PROFESOR WHERE DNI = '{$DNI}'";
//$SQL = "DELETE FROM CURSO WHERE NOMBRE = '{$NOMBRE}'";
echo "PROFESOR ELIMINADO CORRECTAMENTE";
    mysqli_query($CONEXION,$SQL);
    echo '<meta http-equiv="Refresh" content="2; URL=buscar_profesores.php" />
    ';
    
//echo '<div class="borrar"><img src = "../img/spongebob.gif" alt = "bobesponja"/></div>';

   


   
  
//aqui lo que hacemos es recoger los datos del usuario..
//variable en la que guardamos la sentencia sql.

?>

<?php 
}
 ?>



