<?php

require_once __DIR__ . '/../Core/Database.php';

class DashboardService {

    public function stats() {

        $db = Database::connect();

        return [
            'users' => $db->query("SELECT COUNT(*) c FROM users")->fetch_assoc()['c'],
            'events' => $db->query("SELECT COUNT(*) c FROM events")->fetch_assoc()['c'],
            'registrations' => $db->query("SELECT COUNT(*) c FROM registrations")->fetch_assoc()['c']
        ];
    }
}