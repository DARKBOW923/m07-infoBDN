
<?php
//if ($_SESSION['role'] == 'admin') {
echo '<form action="../index.php?controller=MatriculaController&action=borrarMatricula" method="post">
    
ID de la cuenta que quieres borrar de la matricula: <input type="text" name = "ID_ALUMNO"><br>
    ID del curso: <input type="text" name = "ID_CURSO">
   
    <br/>
  
    <input type = "submit" value="Añadir ALYUMNO">
</form>';
//}
?>
