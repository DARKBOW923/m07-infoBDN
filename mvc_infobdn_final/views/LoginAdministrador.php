
<?php
//if ($_SESSION['role'] == 'admin') {
echo '<form action="../index.php?controller=AdminController&action=validarAdministrador" method="post">
    
    Usuario: <input type="text" name = "USUARIO"><br>
    Contrasenya<input type="password" name = "CONTRASENYA"><br>
   
    <br/>
  
    <input type = "submit" value="Añadir ALYUMNO">
</form>';
//}
?>
