<?php
echo $stmt;
echo '<table class ="centrar" border = 1px solid black>';
echo '

    <th>ID_ALUMNO</th>
    <th> DNI</th>
    <th>NOMBRE</th> 
    <th> APELLIDO </th> 
    <th> FOTO</th>
    <th> CONTRASENYA </th>
';

foreach ($mostrarTodos  as $row )  {
       echo '
            <tr>  
                <td>' . $row['ID_ALUMNO'].'</td>
                <td>' . $row['DNI'] . '</td>
                <td>' . $row['NOMBRE'] . '</td>
                <td>' . $row['APELLIDO']. '</td>
                <td>' . $row['FOTO']. '</td>
                <td>' . $row['CONTRASENYA'] . '</td>
                <td><a href="../index.php?controller=AlumnoController&action=borrarAlumnos&ID_ALUMNO='.$row['ID_ALUMNO']. '">Borrar</a></td>                
            </tr>';
            
        }
        echo '</table>';
        

?>

            <a href="../index.php?controller=AlumnoController&action=modificarAlumnos&ID_ALUMNO='.$row['ID_ALUMNO']. '">editar</a>
          
<?php
//if ($_SESSION['role'] == 'admin') {
echo '<form action="../index.php?controller=AlumnoController&action=ModificarAlumnos" method="post">
    
    ID_ALUMNO <input type="text" name = "ID_ALUMNO" value=' . $row['ID_ALUMNO'].'><br>
    DNI <input type="text" name = "DNI"value=' . $row['DNI'].'><br>
    NOMBRE <input type="text" name = "NOMBRE"value=' . $row['NOMBRE'].'><br>
    APELLIDO <input type="text" name = "APELLIDO"value=' . $row['APELLIDO'].'><br>
    FOTO <input type="text" name = "FOTO"value=' . $row['FOTO'].'><br>
    CONTRASENYA <input type="text" name = "CONTRASENYA"value=' . $row['CONTRASENYA'].'><br>
    <br/>
    <input type = "submit" value="EDITAR ALUMNO">
</form>';
?>