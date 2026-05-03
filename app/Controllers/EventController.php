<?php
require_once __DIR__ . '/../Models/Event.php';

class EventController {
    public function index(){
        $events = (new Event())->all();
        include "../resources/views/user/events.php";
    }
}