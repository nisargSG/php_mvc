<?php

require_once('../utils/db.php');

class Car {
    private $name,$color;

    public function __construct($name,$color) {
        $this->name = $name;
        $this->color = $color;
    }

    public function getName() {
        return $this->name;
    }

    public function getColor() {
        return $this->color;
    }

    public static function getAllCars(){
        $result = executeQuery("SELECT * FROM tb_cars");
        return $result;
    }

    public function getCar(){

    }

}
?>