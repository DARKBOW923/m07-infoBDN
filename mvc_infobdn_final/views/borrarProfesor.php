
<?php
//if ($_SESSION['role'] == 'admin') {
echo '<form action="../index.php?controller=ProfesorController&action=quitarProfesor" method="post">
    DNI del profesor que quieres borrar.
    <input type="text" name = "DNI">
   
    <br/>
  
    <input type = "submit" value="Borrar curso">
</form>';
//}
?>