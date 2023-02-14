<?php
require_once 'Database.php';
class Curso extends Database {
    private $id_curso;
    private $nombre;
    private $descripcion;  
    private $horas;
    private $f_inicio;
    private $f_final;
    private $profesor;

    function getid_curso(){
        return $this->id_curso;
    }
    function setid_curso($id_curso){
        $this->id_curso = $id_curso;
    }
    
    function getnombre(){
        return $this->nombre;
    }
    function setnombre($nombre){
        $this->nombre = $nombre;
    }
    
    function getDescripcion(){
        return $this->descripcion;
    }
    function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
    function getHoras(){
        return $this->horas;
    }
    function setHoras($horas){
        $this->horas = $horas;
    }
    function getf_inicio(){
        return $this->f_inicio;
    }
    function setf_inicio($f_inicio){
        $this->f_inicio = $f_inicio;
    }
    function getf_final(){
        return $this->f_final;
    }
    function setf_final($f_final){
        $this->f_final = $f_final;
    }
    function getProfesor(){
        return $this->profesor;
    }
    function setProfesor($profesor){
        $this->profesor = $profesor;
    }
    function conectar()
    {
        $this->db->query("SET NAMES 'utf8'");
    }
    
    function insertarCurso()
    {
        //aqui uso una pdo
        $sql = "INSERT INTO CURSO (ID_CURSO,NOMBRE,DESCRIPCION,HORAS,F_INICIO,F_FINAL,PROFESOR) VALUES (:ID_CURSO, :NOMBRE,:DESCRIPCION,:HORAS,:F_INICIO,:F_FINAL,:PROFESOR)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':ID_CURSO', $this->id_curso);
        $stmt->bindParam(':NOMBRE', $this->nombre);
        $stmt->bindParam(':DESCRIPCION', $this->descripcion);
        $stmt->bindParam(':HORAS', $this->horas);
        $stmt->bindParam(':F_INICIO', $this->f_inicio);
        $stmt->bindParam(':F_FINAL', $this->f_final);
        $stmt->bindParam(':PROFESOR', $this->profesor);
        $stmt->execute();
        return "Producto insertado: " . $this->nombre;
        
        
        /*$sql = "INSERT INTO paco (codigo,nombre) VALUES ('". $this->codigo . "', '" . $this->nombre ."')";
        $this->db->query($sql);
        return "Producto insertado: " . $this->nombre;*/
    }
    function borrarCurso()
    {
        //aqui uso una pdo
        $sql = "DELETE FROM CURSO WHERE :ID_CURSO = ID_CURSO";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':ID_CURSO', $this->id_curso);
        $stmt->execute();
        return "Producto borrado: " . $this->id_curso;
        
        
        /*$sql = "INSERT INTO paco (codigo,nombre) VALUES ('". $this->codigo . "', '" . $this->nombre ."')";
        $this->db->query($sql);
        return "Producto insertado: " . $this->nombre;*/
    }
    function modificarCursos()
    {
        //aqui uso una pdo
        $sql = "UPDATE CURSO SET  NOMBRE = :NOMBRE, DESCRIPCION =:DESCRIPCION, HORAS =:HORAS,F_INICIO = :F_INICIO,F_FINAL =:F_FINAL,PROFESOR =:PROFESOR WHERE ID_CURSO = :ID_CURSO";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':ID_CURSO', $this->id_curso);
        $stmt->bindParam(':NOMBRE', $this->nombre);
        $stmt->bindParam(':DESCRIPCION', $this->descripcion);
        $stmt->bindParam(':HORAS', $this->horas);
        $stmt->bindParam(':F_INICIO', $this->f_inicio);
        $stmt->bindParam(':F_FINAL', $this->f_final);
        $stmt->bindParam(':PROFESOR', $this->profesor);
        $stmt->execute();
        return "Producto insertado: " . $this->nombre;
        
        
        /*$sql = "INSERT INTO paco (codigo,nombre) VALUES ('". $this->codigo . "', '" . $this->nombre ."')";
        $this->db->query($sql);
        return "Producto insertado: " . $this->nombre;*/
    }
    function mostrarCurso(){
        $sql = "SELECT * FROM CURSO";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    }
    function mostrarCursoNoApuntado($usuario){
        echo "soy"+$usuario;
        $sql ="SELECT DISTINCT MATRICULA.ID_ALUMNO,MATRICULA.ID_CURSO,CURSO.NOMBRE,CURSO.DESCRIPCION,CURSO.HORAS,CURSO.F_INICIO,CURSO.F_FINAL,MATRICULA.CALIFICACIONES FROM ALUMNOS,MATRICULA,CURSO WHERE MATRICULA.ID_ALUMNO =$usuario ";
        echo $sql;
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    }
}

?>