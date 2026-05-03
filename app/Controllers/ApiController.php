<?php
require_once __DIR__ . '/../Models/Registration.php';

class ApiController {
    public function register(){
        session_start();

        $data = json_decode(file_get_contents("php://input"),true);

        (new Registration())->register($_SESSION['user']['id'],$data['event_id']);

        echo json_encode(['msg'=>'Registered']);
    }
}