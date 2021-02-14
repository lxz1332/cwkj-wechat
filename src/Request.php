<?php

namespace cwkj\api;

abstract class Request {

    public $method = "POST";
    public $uri;
    public $data = [];
    public $options = [];
    protected $group;

    public function __construct(Group $group) {
        $this->group = $group;
        dump($this->group);
    }

}
