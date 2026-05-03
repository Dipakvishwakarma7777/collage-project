<?php
class Router {
    private $routes = [];

    public function get($path, $cb) {
        $this->routes['GET'][$path] = $cb;
    }

    public function post($path, $cb) {
        $this->routes['POST'][$path] = $cb;
    }

    public function resolve() {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $path = str_replace('/mca-event-management/public','',$path);

        $method = $_SERVER['REQUEST_METHOD'];

        $cb = $this->routes[$method][$path] ?? false;

        if(!$cb) return "404";

        require_once __DIR__."/../Controllers/".$cb[0].".php";

        $controller = new $cb[0];
        return $controller->{$cb[1]}();
    }
}