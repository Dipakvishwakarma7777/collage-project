<?php
require_once "../app/Core/Database.php";

class Registration {
    public function register($uid,$eid){
        $db = Database::connect();

        $stmt = $db->prepare("INSERT INTO registrations(user_id,event_id) VALUES(?,?)");
        $stmt->bind_param("ii",$uid,$eid);

        return $stmt->execute();
    }
}