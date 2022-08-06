<?php




class Paypal
{
    public function payNow()
    {
    }
}

class Visa
{
    public function payNow()
    {
    }
}

class Cash
{
    public function payNow()
    {
    }
}


class BuyProduct
{
    public function pay(Cash $paymentType)
    {
        $paymentType->payNow();
    }
}

$paymentType = new Cash();
$paymentType = new Paypal(); // will throw an error because BuyProduct's method pay() is expecting a Cash() object
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType); // $buyProduct gains access to Cash()