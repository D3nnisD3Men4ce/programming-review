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
    $person1 = new Person();
    $person1->setName("Keren");
    $person1->getName();


    $person2 = new Person();
    $person2->setName("Bags");
    echo $person2->name;

    ?>
</body>

</html>