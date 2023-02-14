<?php
class AdminController{
    public function validarAdministrador(){
        $usuario = $_POST['USUARIO'];
        $password = $_POST['CONTRASENYA'];
        require_once "./models/Administrador.php";
        $administrador = new Administrador();
        $administrador ->existeAdministrador( $usuario, $password );
        if ($administrador){
            echo "Validado correctamente";
            $_SESSION['rol'] = "Administrador";
            require_once "./views/MenuAdministrador.php";
        }else{
            echo "No validado!!!!!!";
        }
       
    }

}
?>