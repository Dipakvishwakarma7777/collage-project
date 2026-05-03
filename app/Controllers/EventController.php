<?php
require_once "../app/Models/Event.php";

class EventController {
    public function index(){
        $events = (new Event())->all();
        include "../resources/views/user/events.php";
    }
}