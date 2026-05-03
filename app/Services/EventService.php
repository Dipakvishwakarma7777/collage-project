<?php
require_once "../app/Models/Event.php";

class EventService {
    public function getAll() {
        return (new Event())->all();
    }
}