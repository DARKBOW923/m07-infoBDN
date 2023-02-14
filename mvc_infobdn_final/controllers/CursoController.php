<?php
class CursoController{
    public function insertarCursos(){
        //aqui lo que hacemos es recoger los valores POST, creamos una instancia de insertarModel y luego 
        if ($_SESSION['rol'] == "Administrador"){
            require_once "./models/Curso.php";
            $curso = new Curso();
            $curso->getid_curso($_POST['ID_CURSO']);
            $curso->setid_curso($_POST['ID_CURSO']);
            $curso->getnombre($_POST['NOMBRE']);
            $curso->setnombre($_POST['NOMBRE']);
            $curso->getDescripcion($_POST['DESCRIPCION']);
            $curso->setDescripcion($_POST['DESCRIPCION']);
            $curso->getHoras($_POST['HORAS']);
            $curso->setHoras($_POST['HORAS']);
            $curso->getf_inicio($_POST['F_INICIO']);
            $curso->setf_inicio($_POST['F_INICIO']);
            $curso->getf_final($_POST['F_FINAL']);
            $curso->getf_final($_POST['F_FINAL']);
            $curso->getProfesor($_POST['PROFESOR']);
            $curso->setProfesor($_POST['PROFESOR']);
            $curso->conectar();
            echo "" . $curso->insertarCurso();
        }else{
            echo "no validado";
        }
    }   
    public function BorrarDatos(){
        //aqui lo que hacemos es recoger los valores POST, creamos una instancia de insertarModel y luego 
        if ($_SESSION['rol'] == "Administrador"){
            require_once "./models/Curso.php";
            $curso = new Curso();
            $curso->getid_curso($_POST['ID_CURSO']);
            $curso->setid_curso($_POST['ID_CURSO']);
            $curso->conectar();
            echo "" . $curso->borrarCurso();
        }else{
            echo "no validado";
        }
    }
    public function modificarCurso(){
        //aqui lo que hacemos es recoger los valores POST, creamos una instancia de insertarModel y luego 
        if ($_SESSION['rol'] == "Administrador"){
            require_once "./models/Curso.php";
            $curso = new Curso();
            $curso->getid_curso($_POST['ID_CURSO']);
            $curso->setid_curso($_POST['ID_CURSO']);
            $curso->getnombre($_POST['NOMBRE']);
            $curso->setnombre($_POST['NOMBRE']);
            $curso->getDescripcion($_POST['DESCRIPCION']);
            $curso->setDescripcion($_POST['DESCRIPCION']);
            $curso->getHoras($_POST['HORAS']);
            $curso->setHoras($_POST['HORAS']);
            $curso->getf_inicio($_POST['F_INICIO']);
            $curso->setf_inicio($_POST['F_INICIO']);
            $curso->getf_final($_POST['F_FINAL']);
            $curso->getf_final($_POST['F_FINAL']);
            $curso->getProfesor($_POST['PROFESOR']);
            $curso->setProfesor($_POST['PROFESOR']);
            $curso->conectar();
            echo "" . $curso->modificarCursos();
        }
    }    
    public function mostrarCursos(){
        //aqui lo que hacemos es recoger los valores POST, creamos una instancia de insertarModel y luego 
        if ($_SESSION['rol'] == "Alumno"){
            require_once "./models/Curso.php";
            $curso = new Curso();
            $mostrarTodos= $curso->mostrarCurso();
            require_once "./views/CpanelAlumno.php";
        }else{
            echo "no validado!";
            echo $_SESSION['rol'];
        }
    }
    public function mostrarCursosDisponibles(){
        //aqui lo que hacemos es recoger los valores POST, creamos una instancia de insertarModel y luego 
        if ($_SESSION['rol'] == "Alumno"){
            require_once "./models/Curso.php";
            $curso = new Curso();
            echo "soy".$curso;
            $mostrarTodos= $curso->mostrarCursoNoApuntado($curso);
            require_once "./views/CpanelAlumno.php";
        }else{
            echo "no validado!";
            echo $_SESSION['rol'];
        }
    }
}
?>