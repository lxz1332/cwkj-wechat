<?php

namespace cwkj\api;

include_once __DIR__ . '/request/default.php';

class Client {

    public function __call($method, $params) {
        $file = __DIR__ . '/request/' . $method . '.php';
        if (file_exists($file)) {
            include_once $file;
            return new Group($this, $method);
        } else {
            return (new Group($this))->{$method}(...$params);
        }
    }

}
