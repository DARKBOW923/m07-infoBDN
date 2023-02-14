<?php
class AlumnoController {
    public function mostrarAlumnos(){
        if ($_SESSION['rol'] == "Administrador" || $_SESSION['rol'] == "Profesor"){

        
            require_once "./models/Alumno.php";

            //aqui lo que hacemos es recoger los valores POST, creamos una instancia de insertarModel y luego 
            
            $alumno = new Alumno();
            $mostrarTodos= $alumno->desplegarAlumnosNormal();
            require_once "./views/VerTodosLosAlumnos.php";
        }else{
            echo "No validado!";
        }
    }
    public function registrarAlumno(){
        require_once "./models/Alumno.php";
        $alumno = new Alumno();
        $alumno->getid_alumno($_POST['ID_ALUMNO']);
        $alumno->setid_alumno($_POST['ID_ALUMNO']);
        $alumno->getdni($_POST['DNI']);
        $alumno->setdni($_POST['DNI']);
        $alumno->getnombre($_POST['NOMBRE']);
        $alumno->setnombre($_POST['NOMBRE']);
        $alumno->getapellido($_POST['APELLIDO']);
        $alumno->setapellido($_POST['APELLIDO']);
        $alumno->getfoto($_POST['FOTO']);
        $alumno->setfoto($_POST['FOTO']);
        $alumno->getcontrasenya($_POST['CONTRASENYA']);
        $alumno->getcontrasenya($_POST['CONTRASENYA']);
        $alumno->getdesactivar($_POST['DESACTIVAR']);
        $alumno->setdesactivar($_POST['DESACTIVAR']);
        $alumno->conectar();
        echo "" . $alumno->anyadirAlumno();
        require_once "./views/CpanelAlumno.php";
    }
    public function borrarAlumnos(){
        if ($_SESSION['rol'] == "Administrador"){

        
            require_once "./models/Alumno.php";
            $alumno = new Alumno();
            $id = $_GET['ID_ALUMNO'];
            echo $id;
            $alumno->conectar();
            $mostrarTodos= $alumno->borrarAlumno($id);
        }else{
            echo "No validado!";
        }
    }
    public function borrarForm(){
        if ($_SESSION['rol'] == "Administrador"){

            
            echo $_GET['ID_ALUMNO'];
            $id = $_GET['NOMBRE'];
            //Ir al modelo y obtener los datos del alumno
            require_once "./models/Alumno.php";
            $alumno = new Alumno();
            $mostrarTodos= $alumno->MostrarAlumnoEnConcreto($id);
            require_once "./views/BorrarAlumno.php";
        }else{
            echo "No validado!";
        }
    }
    public function editarForm(){
        if ($_SESSION['rol'] == "Administrador"){

        
        echo $_GET['ID_ALUMNO'];
        $id = $_GET['ID_ALUMNO'];
        //Ir al modelo y obtener los datos del alumno
        require_once "./models/Alumno.php";
        $alumno = new Alumno();
        $mostrarTodos= $alumno->MostrarAlumnoEnConcreto($id);
        require_once "./views/ModificarAlumno.php";
        }else{
            echo "No validado!";
            echo $_SESSION['rol'];
        }
        
    }
    
    /*public function seleccionarAlumnosConcretos(){
        require_once "./models/Alumno.php";
        $alumno = new Alumno();
        $mostrarTodos= $alumno->MostrarAlumnoEnConcreto($id);
        return $mostrarTodos;
    }*/
    public function validarAlumno(){
        $usuario = $_POST['ID_USUARIO'];
        $password = $_POST['CONTRASENYA'];
        require_once "./models/Alumno.php";
        $alumno = new Alumno();
        $alumno ->existeAlumno( $usuario, $password );
        if ($alumno){
            echo "Validado correctamente";
            $_SESSION['rol'] = "Alumno";
            echo $_SESSION['rol'];
            require_once "./views/MenuAlumno.php";
        }else{
            echo "No validado!!!!!!";
        }
        //NOTA: No entiendo por que tengo que ponerlo así, pero funcionar las validaciones funionan..
    }
    public function loginAlumno(){
        require_once "./views/LoginAlumno.php";
    }
    public function apuntarse(){
        if ($_SESSION['rol'] == "Alumno"){
            require_once "./models/Matricula.php";
            $matricula = new Matricula();
        $alumno =$_POST['ID_ALUMNO'];
        $curso = $_POST['ID_CURSO'];
        echo "PEP".$_GET['ID_USUARIO'];
        $existe = $profesor ->registrarseCurso($alumno, $curso);
        require_once "./views/Apuntarse.php";
        }else{
            echo "No estas validado";
        }
    }
    function modificarAlumnos(){
        if ($_SESSION['rol'] == "Administrador"){
            require_once "./models/Alumno.php";
            $curso = $_POST['ID_ALUMNO'];
            $nombre = $_POST['NOMBRE'];
            $apellido = $_POST['APELLIDO'];
            $foto = $_POST['FOTO'];
            $contrasenya =$_POST['CONTRASENYA'];
            $desactivar = $_POST['DESACTIVAR'];
            require_once "./models/Alumno.php";
            $alumno = new Alumno();
            $modificar = $alumno ->modificarAlumno2( $curso, $nombre,$apellido,$foto,$contrasenya,$desactivar );
            //Si co,prubo si esxite el profesor creo la variable de sesion rol
        }else{
            echo "No validado!";
        }
    }
    function ApuntarseFalso(){
        if ($_SESSION['rol'] == "Alumno"){
        require_once "./views/Apuntarse.php";
        }else{
            echo "No validado!";
        }
    }
    function desapuntarse(){
        if ($_SESSION['rol'] == "Alumno"){
            require_once "./views/Desapuntarse.php";
            }else{
                echo "No validado!";
            }
    }
}
?>