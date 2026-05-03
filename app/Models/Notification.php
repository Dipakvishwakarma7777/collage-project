<?php
require_once "../app/Core/Database.php";

class Notification {
    public function get($uid) {
        return Database::connect()->query("SELECT * FROM notifications WHERE user_id=$uid");
    }
}