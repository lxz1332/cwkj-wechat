<?php

namespace cwkj\api;

include_once __DIR__ . '/request/default.php';

class Client {

    public function __call($method, $params) {
        dump($method);
        $file = __DIR__ . '/request/' . $method . '.php';
        if (file_exists($file)) {
            include_once $file;
            return new Group($this, $method);
        } else {
            dump(new Group());
//            return (new Group($this))->{$method}(...$params);
        }
    }

//    public function a() {
//        echo 1;
//    }

}
