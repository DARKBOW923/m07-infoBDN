
<?php
//if ($_SESSION['role'] == 'admin') {
echo '<form action="../index.php?controller=ProfesorController&action=anyadirProfesor" method="post">
    ISBN
    <input type="text" name = "DNI">
    <input type="text" name = "APELLIDOS">
    <input type="text" name = "T_ACADEMICO">
    <input type="text" name = "FOTO">
    <input type="text" name = "CONTRASENYA">
    <input type="text" name = "NOMBRE">
    <input type="text" name = "DESACTIVAR">
    <br/>
  
    <input type = "submit" value="Añadir ALYUMNO">
</form>';
//}
?>