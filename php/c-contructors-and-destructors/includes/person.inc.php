<?php

class Person
{
    public $name;
    public $eyeColor;
    public $age;


    public function __construct($nameeee, $eyeColorrrr, $ageeee)
    {
        $this->name = $nameeee;
        $this->eyeColor = $eyeColorrrr;
        $this->age = $ageeee;
    }

    public function __destruct() // This method runs when an object is destroyed
    {
        echo "Destructor: Object deleted! ";
    }
}