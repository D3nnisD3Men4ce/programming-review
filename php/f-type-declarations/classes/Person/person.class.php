<?php

namespace Person;

class Person
{
    public $name;
    public $age;


    public function __construct(string $nameeee, int $ageeee) // Declare type 
    {
        $this->name = $nameeee;
        $this->age = $ageeee;
    }

    public function getPerson()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function __destruct()
    {
        echo "Destructor: Object deleted! ";
    }
}