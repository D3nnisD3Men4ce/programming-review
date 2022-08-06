<?php

class Person
{
    private $first = "Daniel";
    private $last = "Nielsen";
    public $age = "28";
    protected $email = "test@test.com";
    // protected means data can be accessed in the same class or by another class extending to it

    // Private means you will have access to data inside the class
    // $first is printed out because it passed through a method in the Person class
    // $first will not be accessed directly when using a private property

    public function owner()
    {
        $a = $this->first;
        return $a;
    }
};



class Pet extends Person
{
    public function owner()
    {
        $a = "Hi there!";
        return $a;
    }

    public function email()
    {
        return $this->email;
    }
};