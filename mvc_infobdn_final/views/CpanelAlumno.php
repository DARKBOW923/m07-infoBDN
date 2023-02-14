<?php
echo $_POST['ID_USUARIO'];
echo '<table class ="centrar" border = 1px solid black>';
echo '

    <th>ID_CURSO</th>
    <th>NOMBRE</th>
    <th>DESCRIPCION</th> 
    <th>HORAS</th> 
    <th>F_INICIO</th>
    <th>F_FINAL</th>
    <th>PROFESOR</th>
';

foreach ($mostrarTodos  as $row )  {
       echo '
            <tr>  
                <td>' . $row['ID_CURSO'].'</td>
                <td>' . $row['NOMBRE'] . '</td>
                <td>' . $row['DESCRIPCION'] . '</td>
                <td>' . $row['HORAS']. '</td>
                <td>' . $row['F_INICIO']. '</td>
                <td>' . $row['F_FINAL'] . '</td>
                <td>' . $row['PROFESOR'] . '</td>
                <td><a href="../index.php?controller=AlumnoController&action=ApuntarseFalso">APUNTARSE</a></td>
                <td><a href="../index.php?controller=AlumnoController&action=desapuntarse">BORRARSE</a></td>
                
            </tr>';
            
        }
        echo '</table>';
        

?>