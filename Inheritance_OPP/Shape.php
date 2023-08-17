<?php
class Shape {
    private $name;
    public function __construct($name) {
        $this->name = $name;
    }
    public function showName() 
    {
        return "This name is" . $this->name;
    }
}