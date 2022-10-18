<?php
session_start();
session_destroy();
echo 'sesion cerrada con exito';
echo ' <meta http-equiv="Refresh" content="2; URL=login_alumno.php" />
    ';
?>