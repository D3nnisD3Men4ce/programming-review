<?php

class Person
{
    public $name;
    public $eyeCOlor;
    public $age;

    public function setName($nameName)
    {
        $this->name = $nameName;
    }

    public function getName()
    {
        echo $this->name;
    }
}