<?php
require_once "./models/Database.php";
class Matricula extends Database{
    function insertarMatricula($alumno, $curso){
        $sql = "INSERT INTO MATRICULA (ID_ALUMNO,ID_CURSO) VALUES ($alumno,$curso)";
        echo $sql;
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    function quitarMatricula($alumno, $curso){
        $sql = "DELETE FROM MATRICULA WHERE ID_ALUMNO = $alumno AND ID_CURSO = $curso";
        echo $sql;
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}