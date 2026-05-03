<?php
require_once "Router.php";

class App {
    public $router;

    public function __construct() {
        $this->router = new Router();
    }

    public function run() {
        echo $this->router->resolve();
    }
}

