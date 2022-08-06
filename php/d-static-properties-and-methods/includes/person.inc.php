<?php

class Person
{
    public $name;
    public $eyeColor;
    public $age;

    public static $drinkingAge = 18;
    // Static properties and methods are used when you want to create properties and methods that don't have to be part of an object



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

    public static function setDrinkingAge($newDA)
    {
        self::$drinkingAge = $newDA;
    }

    public static function getDA()
    {
        return self::$drinkingAge;
    }
}