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
                <input type ="text"' . $row['ID_ALUMNO'].'</td>
                <td>' . $row['DNI'] . '</td>
                <td>' . $row['NOMBRE'] . '</td>
                <td>' . $row['APELLIDO']. '</td>
                <td>' . $row['FOTO']. '</td>
                <td>' . $row['CONTRASENYA'] . '</td>
                <td><a href="../index.php?controller=AlumnoController&action=borrarAlumnos&ID_ALUMNO='.$row['ID_ALUMNO']. '">Eliminar</a></td>
                <td><a href="../index.php?controller=AlumnoController&action=editarForm&ID_ALUMNO='.$row['ID_ALUMNO']. '">Editar</a></td>
                
            </tr>';
            
        }
        echo '</table>';
        

?>