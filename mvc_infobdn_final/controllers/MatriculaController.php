<?php
class MatriculaController{
    public function insertarEnMatricula(){
        $curso = $_POST['ID_CURSO'];
        $alumno = $_POST['ID_ALUMNO'];
        require_once "./models/Matricula.php";
        $matricula = new Matricula();
        $apuntarse = $matricula ->insertarMatricula( $alumno, $curso );
        //Si co,prubo si esxite el profesor creo la variable de sesion rol
        
        //aqui entiendo que como no hay vistas, no hace falta validacion
    }
    public function borrarMatricula(){
        $curso = $_POST['ID_CURSO'];
        $alumno = $_POST['ID_ALUMNO'];
        require_once "./models/Matricula.php";
        $matricula = new Matricula();
        $apuntarse = $matricula ->quitarMatricula( $alumno, $curso );
    }
}
?>