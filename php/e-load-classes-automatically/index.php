<?php
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

    $house1 = new House("Lapasan", 7);
    echo $house1->getAddress();
    ?>
</body>

</html>