<?php

class ClassOne {
    public $property;

    public function __construct($params) {
        $this->property = $params;
    }

    public function getData(){
        return $this-> property;
    }
}
