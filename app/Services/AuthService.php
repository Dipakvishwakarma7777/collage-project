<?php
require_once __DIR__ . '/../Models/User.php';

class AuthService {

    public function login($email,$password){
        $user = (new User())->findByEmail($email);

        if($user && password_verify($password,$user['password'])){
            session_start();
            $_SESSION['user']=$user;
            return true;
        }
        return false;
    }

    public function register($data){
        return (new User())->create($data);
    }
}