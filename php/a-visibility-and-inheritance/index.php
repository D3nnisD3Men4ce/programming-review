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
    $pet1 = new Pet();
    echo $pet1->owner();
    echo $pet1->email();


    $person1 = new Person();
    echo $person1->owner();
    echo $person1->age;
    ?>
</body>

</html>