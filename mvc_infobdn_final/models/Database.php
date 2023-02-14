<?php

class Database{
    protected $db;
    
    public function __construct(){
        $servername = "192.168.1.38";
        $dbname= "infoBDN";
        $username = "root2";
        $password = "1234";

        //creem una nova connexió instancinat l'objecte PDO
		$this->db = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);
		// establim el mode PDO error a exception per poder
		// recuperar les excepccions
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // return $this->db
     }
    }
    ?>
