<?php
require_once "Database.php";

class Alumno extends Database{
    private $id_alumno;
        private $dni;
        private $nombre;  
        private $apellido;
        private $foto;
        private $contrasenya;
        private $desactivar;

        function getid_alumno(){
            return $this->id_alumno;
        }
        function setid_alumno($id_alumno){
            $this->id_alumno = $id_alumno;
        }
        
        function getdni(){
            return $this->dni;
        }
        function setdni($dni){
            $this->dni = $dni;
        }
        function getnombre(){
            return $this->id_alumno;
        }
        function setnombre($nombre){
            $this->nombre = $nombre;
        }
        function getapellido(){
            return $this->apellido;
        }
        function setapellido($apellido){
            $this->apellido = $apellido;
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
        function getdesactivar(){
            return $this->desactivar;
        }
        function setdesactivar($desactivar){
            $this->desactivar = $desactivar;
        }
        
        function conectar()
        {
            $this->db->query("SET NAMES 'utf8'");
        }

    function desplegarAlumnosNormal() {
        $query = "SELECT * FROM ALUMNOS";

        //pdo query and print_r

        $stmt = $this->db->prepare($query);
        
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
            
    }
    function anyadirAlumno(){
        
        
        
            //aqui uso una pdo
            $sql = "INSERT INTO ALUMNOS (ID_ALUMNO,DNI,NOMBRE,APELLIDO,FOTO,CONTRASENYA,DESACTIVAR) VALUES (:ID_ALUMNO, :DNI,:NOMBRE,:APELLIDO,:FOTO,:CONTRASENYA,:DESACTIVAR)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':ID_ALUMNO', $this->id_alumno);
            $stmt->bindParam(':DNI', $this->dni);
            $stmt->bindParam(':NOMBRE', $this->nombre);
            $stmt->bindParam(':APELLIDO', $this->apellido);
            $stmt->bindParam(':FOTO', $this->foto);
            $stmt->bindParam(':CONTRASENYA', $this->contrasenya);
            $stmt->bindParam(':DESACTIVAR', $this->desactivar);
            
            $stmt->execute();
            return "Producto insertado: " . $this->nombre;
            
            
            
            /*$sql = "INSERT INTO paco (codigo,nombre) VALUES ('". $this->codigo . "', '" . $this->nombre ."')";
            $this->db->query($sql);
            return "Producto insertado: " . $this->nombre;*/
        }
        function borrarAlumno($id){
        
        
        
            //aqui uso una pdo
            $sql = "DELETE FROM ALUMNOS WHERE ID_ALUMNO = $id";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return "Producto borrado: " . $this->id_alumno;
                
            
            /*$sql = "INSERT INTO paco (codigo,nombre) VALUES ('". $this->codigo . "', '" . $this->nombre ."')";
            $this->db->query($sql);
            return "Producto insertado: " . $this->nombre;*/
        }
        function modificarAlumno2($id,$nombre,$apellido,$foto,$contrasenya){
        
            $sql = "UPDATE ALUMNOS SET NOMBRE = '$nombre', APELLIDO = '$apellido', FOTO = '$foto', CONTRASENYA = '$contrasenya' WHERE ID_ALUMNO = $id";
            echo $sql;
            $stmt = $this->db->prepare($sql); 
            $stmt->execute();
            return "Producto insertado: " . $this->nombre;
            //aqui uso una pdo
            /*$sql = "UPDATE  ALUMNOS SET NOMBRE ='". $this->nombre . "', '". $this->apellido .'", '"". $this->foto ."','" .$this->contrasenya ."'";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':NOMBRE', $this->nombre);
            $stmt->bindParam(':APELLIDO', $this->apellido);
            $stmt->bindParam(':FOTO', $this->foto);
            $stmt->bindParam(':CONTRASENYA', $this->contrasenya);
            $stmt->execute();
            return "Producto insertado: " . $this->nombre;*/
                
            
            /*$sql = "INSERT INTO paco (codigo,nombre) VALUES ('". $this->codigo . "', '" . $this->nombre ."')";
            
            return "Producto insertado: " . $this->nombre;*/
        }
       function existeAlumno($usuario,$password){
            $sql = "SELECT * FROM ALUMNOS WHERE ID_ALUMNO = '$usuario' AND CONTRASENYA = $password";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
       }
       //Funcion que duevuleva los datos del alumnio
        function MostrarAlumnoEnConcreto($id){
            $sql = "SELECT * FROM ALUMNOS WHERE ID_ALUMNO = $id";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
            //$sql = "UPDATE ALUMNOS SET NOMBRE = $nombre APELLIDO = $apellido FOTO = $foto CONTRASENYA = $contrasenya WHERE ID_ALUMNO = $id";

        }
    }

?>