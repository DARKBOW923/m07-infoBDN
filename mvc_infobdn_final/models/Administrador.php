<?php
require_once "./models/Database.php";
class Administrador extends Database{
    function existeAdministrador($usuario, $password){
        $sql = "SELECT * FROM ADMINISTRADOR WHERE USUARIO = '$usuario' AND CONTRASENYA = $password";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>