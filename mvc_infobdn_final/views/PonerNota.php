
<?php
//if ($_SESSION['role'] == 'admin') {
echo '<form action="./index.php?controller=ProfesorController&action=ponerNotas" method="post">
    ISBN
    <input type="text" name = "ID_ALUMNO" value=' . $row['ID_ALUMNO'].'>
    <input type="text" name ="ID_CURSO">Curso al que ponerle nota>
    <input type="text" name ="NOTA">Nota que le pones>
    
    <br/>
  
    <input type = "submit" value="Borrar curso">
</form>';
//}
?>