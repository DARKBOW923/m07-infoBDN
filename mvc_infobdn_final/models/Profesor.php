<?php
require_once "Database.php";

class Profesor extends Database{
        private $dni;
        private $apellidos;  
        private $t_academico;
        private $foto;
        private $contrasenya;
        private $nombre;
        private $desactivar;
    function getdni(){
        return $this->dni;
    }
    function setdni($dni){
        $this->dni = $dni;
    }
    
    function getapellidos(){
        return $this->apellidos;
    }
    function setapellidos($apellidos){
        $this->apellidos = $apellidos;
    }
    
    function gett_academico(){
        return $this->t_academico;
    }
    function sett_academico($t_academico){
        $this->t_academico = $t_academico;
    }
    function getfoto(){
        return $this->foto;
    }
    function setfoto($foto){
        $this->foto = $foto;
    }
    function getcontrasenya(){
        return $this->contrasenya;
    }
    function setcontrasenya($contrasenya){
        $this->contrasenya = $contrasenya;
    }
    function setnombre($nombre){
        $this->nombre = $nombre;
    }
    function getnombre(){
        return $this->nombre;
    }
    
    function setdesactivar($desactivar){
        $this->desactivar = $desactivar;
    }
    function getdesactivar($desactivar){
        $this->desactivar = $desactivar;
    }
    function conectar()
    {
        $this->db->query("SET NAMES 'utf8'");
    }
    function DesplegarAlumnos() {
        $query = "SELECT * FROM ALUMNOS";
//    $query = "SELECT DISTINCT PROFESOR.DNI,CURSO.PROFESOR,CURSO.ID_CURSO,MATRICULA.ID_CURSO,ALUMNOS.ID_ALUMNO,CURSO.NOMBRE,MATRICULA.CALIFICACIONES,CURSO.F_INICIO,CURSO.F_FINAL,CURSO.HORAS FROM ALUMNOS,CURSO,MATRICULA,PROFESOR WHERE PROFESOR.DNI = '{$usuario}' AND CURSO.PROFESOR = '{$usuario}' AND CURSO.ID_CURSO = MATRICULA.ID_CURSO AND ALUMNOS.ID_ALUMNO = MATRICULA.ID_ALUMNO AND ALUMNOS.DESACTIVAR ='si'";

        //pdo query and print_r

        $stmt = $this->db->prepare($query);
        
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
            
    }
    function registrarProfesor()
    {
        //aqui uso una pdo
        $sql = "INSERT INTO PROFESOR (DNI,APELLIDOS,T_ACADEMICO,FOTO,CONTRASENYA,NOMBRE,DESACTIVAR) VALUES (:DNI, :APELLIDOS,:T_ACADEMICO,:FOTO,:CONTRASENYA,:NOMBRE,:DESACTIVAR)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':DNI', $this->dni);
        $stmt->bindParam(':APELLIDOS', $this->apellidos);
        $stmt->bindParam(':T_ACADEMICO', $this->t_academico);
        $stmt->bindParam(':FOTO', $this->foto);
        $stmt->bindParam(':CONTRASENYA', $this->contrasenya);
        $stmt->bindParam(':NOMBRE', $this->nombre);
        $stmt->bindParam(':DESACTIVAR', $this->desactivar);
        $stmt->execute();
        return "Producto insertado: " . $this->dni;
        
        
        /*$sql = "INSERT INTO paco (codigo,nombre) VALUES ('". $this->codigo . "', '" . $this->nombre ."')";
        $this->db->query($sql);
        return "Producto insertado: " . $this->nombre;*/
    }
    function alterarProfesor(){
        //aqui uso una pdo
        $sql = "UPDATE PROFESOR SET  APELLIDOS = :APELLIDOS, T_ACADEMICO =:T_ACADEMICO, FOTO =:FOTO,CONTRASENYA = :CONTRASENYA,NOMBRE =:NOMBRE,DESACTIVAR =:DESACTIVAR WHERE DNI = :DNI";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':DNI', $this->dni);
        $stmt->bindParam(':APELLIDOS', $this->apellidos);
        $stmt->bindParam(':T_ACADEMICO', $this->t_academico);
        $stmt->bindParam(':FOTO', $this->foto);
        $stmt->bindParam(':CONTRASENYA', $this->contrasenya);
        $stmt->bindParam(':NOMBRE', $this->nombre);
        $stmt->bindParam(':DESACTIVAR', $this->desactivar);
        $stmt->execute();
        return "Producto insertado: " . $this->dni;
        
        
        /*$sql = "INSERT INTO paco (codigo,nombre) VALUES ('". $this->codigo . "', '" . $this->nombre ."')";
        $this->db->query($sql);
        return "Producto insertado: " . $this->nombre;*/
    }
    function borrarProfesor(){
        //aqui uso una pdo
        $sql = "DELETE FROM PROFESOR WHERE DNI = :DNI";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':DNI', $this->dni);
        $stmt->execute();
        return "Producto insertado: " . $this->dni;
        
        
        /*$sql = "INSERT INTO paco (codigo,nombre) VALUES ('". $this->codigo . "', '" . $this->nombre ."')";
        $this->db->query($sql);
        return "Producto insertado: " . $this->nombre;*/
    }
    function existeProfesor($usuario, $password){
        $sql = "SELECT * FROM PROFESOR WHERE DNI = $usuario AND CONTRASENYA = $password";
        echo $sql;
        $stmt = $this->db->prepare($sql);
      /* $stmt->bindParam(':DNI', $this->dni);
        $stmt->bindParam(':CONTRASENYA', $this->contrasenya);*/
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    function verProfesores(){
        $sql = "SELECT * FROM PROFESOR";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    function ponerNota($id,$curso,$nota){
        $sql = "UPDATE MATRICULA SET CALIFICACIONES = $nota WHERE MATRICULA.ID_ALUMNO = $id AND MATRICULA.ID_CURSO = $curso";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>