<?php
class Validator {
    public static function required($data, $field) {
        return empty($data[$field]) ? "$field required" : null;
    }
}