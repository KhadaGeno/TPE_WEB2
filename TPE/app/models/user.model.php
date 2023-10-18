<?php
require_once 'config.php'; 

class UserModel {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=tpe_web2;charset=utf8', 'root', '');
    }

    public function getByuser($usuarios) {
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE usuario = ?');
        $query->execute([$usuarios]);

        return $query->fetch(PDO::FETCH_OBJ);
    }
}