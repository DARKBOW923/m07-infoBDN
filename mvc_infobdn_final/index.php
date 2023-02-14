<?php
session_start();
// require_once "autoload.php";
if (isset($_GET['controller'])){
    $nombreController = $_GET['controller'];
}
else{
    //Controlador per dedecto
    $nombreController = "AlumnoController";
}

require_once("./controllers/" . $nombreController . ".php");

$controlador = new $nombreController();
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    else{
        $action ="loginAlumno";
    }
    die($controlador->$action());  



/*if (class_exists($nombreController)){
    $controlador = new $nombreController();
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    else{
        $action ="mostrarLogin";
    }
    die($controlador->$action());   
}else{
    echo "No existe el controlador";
}*/
?>