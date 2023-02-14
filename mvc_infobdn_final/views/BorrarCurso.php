
<?php
//if ($_SESSION['role'] == 'admin') {
echo '<form action="../index.php?controller=CursoController&action=BorrarDatos" method="post">
   Id del curso que quieres borrar
    <input type="text" name = "ID_CURSO">
   
    <br/>
  
    <input type = "submit" value="Borrar curso">
</form>';
//}
?>