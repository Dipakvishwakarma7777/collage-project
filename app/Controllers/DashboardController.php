<?php

require_once __DIR__ . '/../Services/DashboardService.php';

class DashboardController {

    public function index() {

        $stats = (new DashboardService())->stats();

        include __DIR__ . '/../../resources/views/user/dashboard.php';
    }
}