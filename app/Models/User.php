<?php
require_once "../app/Core/Database.php";

class User {

    public function findByEmail($email){
        $db = Database::connect();

        $stmt = $db->prepare("SELECT * FROM users WHERE email=?");
        $stmt->bind_param("s",$email);
        $stmt->execute();

        return $stmt->get_result()->fetch_assoc();
    }

    public function create($data){
        $db = Database::connect();

        $pass = password_hash($data['password'],PASSWORD_BCRYPT);

        $stmt = $db->prepare("INSERT INTO users(email,password) VALUES(?,?)");
        $stmt->bind_param("ss",$data['email'],$pass);

        return $stmt->execute();
    }
}