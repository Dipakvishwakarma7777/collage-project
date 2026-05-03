<?php
require_once "../app/Services/AuthService.php";

class AuthController {

    public function login(){
        include "../resources/views/auth/login.php";
    }

    public function loginPost(){
        $auth = new AuthService();

        if($auth->login($_POST['email'],$_POST['password'])){
            header("Location:/");
        } else {
            echo "Login failed";
        }
    }

    public function register(){
        include "../resources/views/auth/register.php";
    }

    public function registerPost(){
        (new AuthService())->register($_POST);
        header("Location:/login");
    }
}