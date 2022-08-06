<?php

include_once "classes/simpleClass.class.php";

$obj = new SimpleClass();
$obj->helloWorld();


// Anonymous class
// Creates class in one place
// Will not store the class in memory
// Deletes class straight afterward


$newObj = new class()
{
    public function helloWorld()
    {
        echo "Hello world from an anonymous class";
    }
};

$newObj->helloWorld();