<?php


class FirstClass
{

    // Properties
    const EXAMPLE = "You can't change this!";
    // A constant is a variable that can't be changed
    // Use all UPPERCASE

    // Methods
    public static function test()
    {
        $testing = "This is a test!";
        return $testing;
    }
}

$a = FirstClass::EXAMPLE;
echo "\n" . $a;

$b = FirstClass::test();
echo "\n" . $b;

class SecondClass extends FirstClass
{

    // Properties
    public static $staticProperty = "A static property";

    // Methods
    public static function anotherTest()
    {
        echo "\n" .  parent::EXAMPLE; // Scope resolution operators (::) are used when referencing const and static properties and methods
        echo "\n" . self::$staticProperty;
    }
}

$c = SecondClass::anotherTest();
echo "\n" .  $c;

$d = SecondClass::EXAMPLE;
echo "\n" . $d;

$e = SecondClass::test();
echo "\n" . $e;