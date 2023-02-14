<?php
class ProfesorController {
    public function mostrarAlumnos(){
        //aqui lo que hacemos es recoger los valores POST, creamos una instancia de insertarModel y luego 
        if (  $_SESSION['rol'] == "Profesor"){
            require_once "./models/Profesor.php";
            $profesor = new Profesor();
            $mostrarTodos= $profesor->DesplegarAlumnos();
            require_once "./views/CpanelProfesor.php";    
        }
        else{
           echo "No estas validado!";
        }
    }
    public function mostrarProfesor(){
        //aqui lo que hacemos es recoger los valores POST, creamos una instancia de insertarModel y luego 
        if (  $_SESSION['rol'] == "Administrador"){
            require_once "./models/Profesor.php";
            $profesor = new Profesor();
            $mostrarTodos= $profesor->DesplegarAlumnos();
            require_once "./views/CpanelProfesor.php";    
        }
        else{
           echo "No estas validado!";
        }
    }
    public function mostrarProfesoresTrabajando(){
        //aqui lo que hacemos es recoger los valores POST, creamos una instancia de insertarModel y luego 
        if (  $_SESSION['rol'] == "Administrador"){
            require_once "./models/Profesor.php";
            $profesor = new Profesor();
            $mostrarTodos= $profesor->verProfesores();
            require_once "./views/VerTodosLosProfesores.php";    
        }
        else{
           echo "No estas validado!";
        }
    }

    public function anyadirProfesor(){
        require_once "./models/Profesor.php";
        $profesor = new Profesor();
        $profesor->getdni($_POST['DNI']);
        $profesor->setdni($_POST['DNI']);
        $profesor->getapellidos($_POST['APELLIDOS']);
        $profesor->setapellidos($_POST['APELLIDOS']);
        $profesor->gett_academico($_POST['T_ACADEMICO']);
        $profesor->Sett_academico($_POST['T_ACADEMICO']);
        $profesor->getfoto($_POST['FOTO']);
        $profesor->Setfoto($_POST['FOTO']);
        $profesor->getcontrasenya($_POST['CONTRASENYA']);
        $profesor->setcontrasenya($_POST['CONTRASENYA']);
        $profesor->getnombre($_POST['NOMBRE']);
        $profesor->setnombre($_POST['NOMBRE']);
        $profesor->getdesactivar($_POST['DESACTIVAR']);
        $profesor->setdesactivar($_POST['DESACTIVAR']);
        $profesor->conectar();
        $mostrarTodos= $profesor->registrarProfesor();

    }
    public function modificarProfesor(){
        if (  $_SESSION['rol'] == "Administrador"){
            require_once "./models/Profesor.php";
        
            $profesor = new Profesor();
            $profesor->getdni($_POST['DNI']);
            $profesor->setdni($_POST['DNI']);
            $profesor->getapellidos($_POST['APELLIDOS']);
            $profesor->setapellidos($_POST['APELLIDOS']);
            $profesor->gett_academico($_POST['T_ACADEMICO']);
            $profesor->Sett_academico($_POST['T_ACADEMICO']);
            $profesor->getfoto($_POST['FOTO']);
            $profesor->Setfoto($_POST['FOTO']);
            $profesor->getcontrasenya($_POST['CONTRASENYA']);
            $profesor->setcontrasenya($_POST['CONTRASENYA']);
            $profesor->getnombre($_POST['NOMBRE']);
            $profesor->setnombre($_POST['NOMBRE']);
            $profesor->getdesactivar($_POST['DESACTIVAR']);
            $profesor->setdesactivar($_POST['DESACTIVAR']);
            $profesor->conectar();
            $mostrarTodos= $profesor->alterarProfesor();
            require_once "./views/ModificarProfesor.php";
        }else{
            echo "no estas validado!";
        }


    }
    public function quitarProfesor(){
        if (  $_SESSION['rol'] == "Administrador"){
        require_once "./models/Profesor.php";
        $profesor = new Profesor();
        $profesor->getdni($_POST['DNI']);
        $profesor->setdni($_POST['DNI']);
        $profesor->conectar();
        $mostrarTodos= $profesor->borrarProfesor();
        require_once "./views/borrarProfesor.php";

        }
    }
    public function mostrarLogin(){
        echo "Estoy en la vista de Login";
        require_once "./views/LoginProfesor.php";
    }
    public function validarProfesor(){
        $usuario = $_POST['DNI'];
        $password = $_POST['CONTRASENYA'];
        require_once "./models/Profesor.php";
        $profesor = new Profesor();
        $profesor ->existeProfesor( $usuario, $password );
        //Si co,prubo si esxite el profesor creo la variable de sesion rol
        if ($profesor){
            echo "Validado correctamente";
            $_SESSION['rol'] = "Profesor";
            require_once "./views/CpanelProfesor.php";
        }else{
            echo "No validado!!!!!!";
        }
    }
    public function ponerNotas(){
    if (  $_SESSION['rol'] == "Profesor"){
        $alumno = $_POST['ID_ALUMNO'];
        $curso = $_POST['CURSO'];
        $nota = $_POST['NOTA'];
        require_once "./models/Profesor.php";
        $profesor = new Profesor();
        $existe = $profesor ->ponerNotas( $alumno, $curso,$nota );
        }else{
           echo "No estas validado!";
        }
    }
}
?>