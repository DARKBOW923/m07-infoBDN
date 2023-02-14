
<?php
//if ($_SESSION['role'] == 'admin') {
echo '<form action="../index.php?controller=ProfesorController&action=modificarProfesor" method="post">
    
    DNI:<input type="text" name = "DNI"><br>
    APELLIDOS<input type="text" name = "APELLIDOS"><br>
    T_ACADEMICO<input type="text" name = "T_ACADEMICO"><br>
    FOTO<input type="text" name = "FOTO"><br>
    CONTRASENYA:<input type="text" name = "CONTRASENYA"><br>
    NOMBRE:<input type="text" name = "NOMBRE"><br>
    <br/>
  
    <input type = "submit" value="Añadir ALYUMNO">
</form>';
//}
?>