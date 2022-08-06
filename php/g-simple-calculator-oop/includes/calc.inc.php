<?php

declare(strict_types=1);
include 'autoloader.inc.php';

$oper = $_POST["oper"];
$numb1 = $_POST["num1"];
$numb2 = $_POST["num2"];

$calc = new Calc($oper, (int)$numb1, (int)$numb2);


try {
    echo $calc->calculate();
} catch (TypeError $e) {
    echo "ERROR: " . $e->getMessage();
}