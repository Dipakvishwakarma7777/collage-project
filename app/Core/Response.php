<?php
class Response {
    public function json($data) {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}