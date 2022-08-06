<?php
include_once "includes/person.inc.php";
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
    $person1 = new Person("Jazhel", "Brown", 23);
    echo $person1->name;
    echo $person1->eyeColor;
    echo $person1->age;

    $person2 = new Person("test", "test", 76);
    unset($person2); // Destroy $person2 object

    ?>
</body>

</html>