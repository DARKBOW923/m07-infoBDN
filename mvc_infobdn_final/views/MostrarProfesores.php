<?php

echo '<table class="centrar" border = 1px solid black>';
         echo '
         
             <th>DNI</th>
             <th> APELLIDOS</th>
             <th>T_ACADEMICO</th> 
             <th>FOTO</th> 
             <th>CONTRASENYA</th>
             <th>NOMBRE</th>
             <th>DESACTIVAR (ESTADO)</th>
         
         ';
             
                 
         foreach ($mostrarTodos as $row ) {
                echo '
                     <tr>  
                         <td>' . $row['DNI'].'</td>
                         <td>' . $row['APELLIDOS'] . '</td>
                         <td>' . $row['T_ACADEMICO'] . '</td>
                         <td>' . $row['FOTO']. '</td>
                         <td>' . $row['CONTRASENYA']. '</td>
                         <td>' . $row['NOMBRE'] . '</td>
                         <td>' . $row['DESACTIVAR']. '</td>
                     </tr>';
                     
                 }
                 echo '</table>'; 
?>