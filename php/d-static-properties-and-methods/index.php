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
    echo Person::$drinkingAge;
    Person::setDrinkingAge(5456);
    echo "\n" . Person::$drinkingAge;

    $person1 = new Person("test", "test", "12");
    echo "\n" . $person1->getDA();
    ?>
</body>

</html>