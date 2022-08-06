<?php

// Grouping together different classes to share the same rule(s)

interface PaymentInterface
{
    public function paymentProcess();
    // Different classes will need to use the same names
    // There can be multiple rules inside interfaces
};


interface LoginInterface
{
    public function loginFirst();
}



class Paypal implements PaymentInterface, LoginInterface
{

    public function loginFirst()
    {
    }
    public function payNow()
    {
    }
    public function paymentProcess()
    {
        $this->loginFirst();
        $this->payNow();
    }
};

class BankTransfer implements PaymentInterface, LoginInterface
{

    public function loginFirst()
    {
    }
    public function payNow()
    {
    }
    public function paymentProcess()
    {
        $this->loginFirst();
        $this->payNow();
    }
};

class Visa implements PaymentInterface
{
    public function payNow()
    {
    }
    public function paymentProcess()
    {
        $this->payNow();
    }
};

class Cash implements PaymentInterface
{
    public function payNow()
    {
    }
    public function paymentProcess()
    {
        $this->payNow();
    }
};

class BuyProduct
{
    public function pay(PaymentInterface $paymentType)
    {
        $paymentType->paymentProcess();
    }
};


$paymentType = new Cash();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType); // $buyProduct gains access to Cash()