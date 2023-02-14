<?php
echo $stmt;
echo '<table class ="centrar" border = 1px solid black>';
echo '

    <th>DNI</th>
    <th>APELLIDOS</th>
    <th>T_ACADEMICO</th> 
    <th>FOTO</th> 
    <th>CONTRASENYA</th>
    <th>NOMBRE</th>
';

foreach ($mostrarTodos  as $row )  {
       echo '
            <tr>  
                <input type ="text"' . $row['DNI'].'</td>
                <td>' . $row['APELLIDOS'] . '</td>
                <td>' . $row['T_ACADEMICO'] . '</td>
                <td>' . $row['FOTO']. '</td>
                <td>' . $row['CONTRASENYA']. '</td>
                <td>' . $row['NOMBRE'] . '</td>
                <td><a href="../index.php?controller=ProfesorController&action=quitarProfesor&DNI='.$row['DNI']. '">Eliminar</a></td>
                <td><a href="../index.php?controller=ProfesorController&action=modificarProfesor&DNI='.$row['DNI']. '">Editar</a></td>
                
            </tr>';
            
        }
        echo '</table>';
        

?>