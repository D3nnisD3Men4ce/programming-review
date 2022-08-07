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

    $userObj2 = new UsersController();
    $userObj2->createUser(147, "Jazhel5", "jazhel5@keren.com", "password");

    $userObj = new UsersView();
    $userObj->showUser("Jazhel5");

    ?>
</body>

</html>