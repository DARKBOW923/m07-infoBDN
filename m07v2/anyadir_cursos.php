<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        BIENVENIDO ADMINISTRADOR - AQUI PODRAS AÑADIR UN CURSO!<br>
    <form method="post">
        ID CURSO <input type="text" name="id_curso"><br>
        NOMBRE <input type="text" name="nombre"><br>
        DESCRIPCION <input type ="text" name="descripcion"><br>
        HORAS <input type ="text" name ="horas"><br>
        F_INICIO <input type ="date" name ="f_inicio"><br>
        F_FINAL <input type="date" name="f_final"><br>
        PROFESOR <input type ="text" name ="profesor"><br>
        CAMPO <input type="text" name="campo"> <br>
        ENVIAR <input type="submit">
    </form>
    <form method="post">
    buscar <input type="text" name="buscar">
    ENVIAR <input type="submit">
</form>
  
<?php
//datos de la conexion a la base de datos
$IP = "192.168.1.37";
$BASE_DATOS = "infoBDN";
$USUARIO="administrador";
$CONTRASENYA ="1234";
//variable donde guardamos dichos datos
$CONEXION = mysqli_connect($IP,$USUARIO,$CONTRASENYA,$BASE_DATOS);
//comprobacion de que hemos puesto bien los datos y ademas de que se conecta a la bbdd
$ID_CURSO =$_POST["id_curso"];
$NOMBRE =$_POST["nombre"];
$DESCRIPCION =$_POST["descripcion"];
$HORAS =$_POST["horas"];
$F_INICIO =$_POST["f_inicio"];
$F_FINAL=$_POST["f_final"];
$PROFESOR=$_POST["profesor"];
$CAMPO = $_POST["campo"];
$BUSCAR = $_POST['buscar'];

    if (mysqli_connect_errno()){
        echo "conexion no realizada :c";
    }else{
        echo "BIENVENIDO :D";
    }
//aqui lo que hacemos es recoger los datos del usuario..
//variable en la que guardamos la sentencia sql.
$SQL = "INSERT INTO CURSO (ID_CURSO,NOMBRE,DESCRIPCION,HORAS,F_INICIO,F_FINAL,PROFESOR) VALUES ('$ID_CURSO','$NOMBRE','$DESCRIPCION',$HORAS,'$F_INICIO','$F_FINAL','$PROFESOR')";
$BUSCADOR = "SELECT * FROM CURSO WHERE NOMBRE LIKE '%$BUSCAR%'";
//$PEPO =mysqli_query($CONEXION,$BUSCADOR);
$PEPO =mysqli_query($CONEXION,$BUSCADOR);




    echo "<br>";
    echo "Se han anñadido los datos satisfactoriamente :DD";
    mysqli_query($CONEXION,$SQL);


    header("Location: curso.php"); 
    exit();
/*
else{
    
        echo '<table border = 1px solid black>';
        while ( $fila = mysqli_fetch_array($PEPO) ) {
            echo '
            <tr> 
                <td>ID_CURSO</td> 
                <td>DESCRIPCION</td> 
                <td> HORAS </td> 
                <td> F_INICIO </td>
                <td> F_FINAL </td>
                <td> PROFESOR </td>
                <td> EDITAR</td>
                <td> ELIMINAR</td>
            </tr>
            <tr>  
                <td><a href="' . $fila['ID_CURSO'] . '">' . $fila['NOMBRE'] . '</a></td>
                <td>' . $fila['DESCRIPCION'] . '</td>
                <td>' . $fila['HORAS']. '</td>
                <td>' . $fila['F_INICIO']. '</td>
                <td>' . $fila['F_FINAL'] . '</td>
                <td>' . $fila['PROFESOR']. '</td>
               
            </tr>';
            
        }
        echo '</table>';
      
    }*/
  

?>
</body>
</html>