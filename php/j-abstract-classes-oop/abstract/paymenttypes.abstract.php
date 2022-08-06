<?php

abstract class Visa
{
    public function visaPayment()
    {
        return "Perform a payment";
    }

    abstract public function getPayment(); // getPayment method from BuyProduct.class won't work without this
}