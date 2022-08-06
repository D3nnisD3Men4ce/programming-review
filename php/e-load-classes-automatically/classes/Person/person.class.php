<?php

namespace Person;

class Person
{
    public $name;
    public $age;


    public function __construct($nameeee, $ageeee)
    {
        $this->name = $nameeee;
        $this->age = $ageeee;
    }

    public function getPerson()
    {
        return $this->name;
    }

    public function __destruct()
    {
        echo "Destructor: Object deleted! ";
    }
}