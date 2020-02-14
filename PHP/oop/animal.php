<?php

class animal{
    public $name ;
    public $legs = 2;
    public $cold_blooded = "false";

    public function __construct($name) {
        $this->name = $name;
    }

    function setName($name) {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    function setLegs($legs) {
        $this->legs = $legs;
    }

    public function getLegs()
    {
        return $this->legs;
    }

    function setcold_blooded($cold_blooded) {
        $this->cold_blooded = $cold_blooded;
    }

    public function getcold_blooded()
    {
        return $this->cold_blooded;
    }
}

?>