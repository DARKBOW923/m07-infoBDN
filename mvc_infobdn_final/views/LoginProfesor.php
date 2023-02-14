
<?php
//if ($_SESSION['role'] == 'admin') {
echo '<form action="../index.php?controller=ProfesorController&action=validarProfesor" method="post">
    
    Usuario:<input type="text" name = "DNI"><br>
    Contrasenya: <input type="text" name = "CONTRASENYA"><br>
   
    <br/>
  
    <input type = "submit" value="Añadir ALYUMNO">
</form>';
//}
?>