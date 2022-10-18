<?php
session_start();
if(isset($_SESSION['rol']) && $_SESSION['tipo'] == "ADMINISTRADOR"){
    echo $_SESSION['rol'];
    ?>
<?php
//datos de la conexion a la base de datos 
$IP = "192.168.12.164";
$BASE_DATOS = "infoBDN";
$USUARIO="administrador";
$PASSWD ="1234";
//variable donde guardamos dichos datos
$CONEXION = mysqli_connect($IP,$USUARIO,$PASSWD,$BASE_DATOS);
$ID_CURSO = $_GET['ID_CURSO'];


//$SQL = "UPDATE CURSO SET NOMBRE ='{$NOMBRE}', DESCRIPCION ='{$DESCRIPCION}', HORAS=$HORAS,F_INICIO = '{$F_INICIO}', F_FINAL='{$F_FINAL}', PROFESOR='{$PROFESOR}' WHERE ID_CURSO='{$ID_CURSO}'";

$SQL = "UPDATE  CURSO SET DISPONIBLE = 'no' WHERE ID_CURSO = '{$ID_CURSO}'";
    mysqli_query($CONEXION,$SQL);
    echo ' <meta http-equiv="Refresh" content="3; URL=curso.php" />
    ';
    
//echo '<img src = "../img/bongocat.gif" alt = "bongocat"/>';
}
?>

 


