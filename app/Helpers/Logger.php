<?php
class Logger {
    public static function log($msg) {
        file_put_contents("../storage/logs/app.log", $msg."\n", FILE_APPEND);
    }
}