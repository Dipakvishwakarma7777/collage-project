<?php
class Cache {
    public static function set($key, $data) {
        file_put_contents("../storage/cache/$key.json", json_encode($data));
    }

    public static function get($key) {
        $file = "../storage/cache/$key.json";
        return file_exists($file) ? json_decode(file_get_contents($file), true) : null;
    }
}