<?php
require_once "../app/Core/Database.php";

class Event {
    public function all(){
        return Database::connect()->query("SELECT * FROM events");
    }
}