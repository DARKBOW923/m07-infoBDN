<?php
//if ($_SESSION['role'] == 'admin') {
echo '<form action="../index.php?controller=CursoController&action=insertarCursos" method="post">
 
    ID DEL CURSO:<input type="text" name = "ID_CURSO"><br>
    NOMBRE DEL CURSO<input type="text" name = "NOMBRE"><br>
    DESCRIPCION<input type="text" name = "DESCRIPCION"><br>
    HORAS<input type="text" name = "HORAS"><br>
    F_INICIO<input type="date" name = "F_INICIO"><br>
    F_FINAL<input type="date" name = "F_FINAL"><br>
    PROFESOR<input type="text" name = "PROFESOR"><br>
    <br/>
  
    <input type = "submit" value="Añadir curso">
</form>';
//}
?>