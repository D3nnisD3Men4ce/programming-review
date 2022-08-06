<?php

class House
{
    public $address;
    public $street;


    public function __construct($addresss, $streett)
    {
        $this->address = $addresss;
        $this->street = $streett;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function __destruct()
    {
        echo "Destructor: Object deleted! ";
    }
}