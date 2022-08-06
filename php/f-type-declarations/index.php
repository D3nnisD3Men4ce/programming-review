<?php

declare(strict_types=1); // To strictly pass around data with the same data types
include 'includes/autoLoader.inc.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $person1 = new Person\Person("Dennis", 21); // Using namespaces
    echo $person1->getPerson();
    echo "<br>";

    try {
        // $person1->setName(2);    // Passing a wrong type of data
        $person1->setName("Ivan");
        echo $person1->getPerson();
    } catch (TypeError $e) {
        echo "ERROR!: " . $e->getMessage();
    }
    ?>
</body>

</html>