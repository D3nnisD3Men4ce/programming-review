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
    $testObj = new Test();
    // echo $testObj->getData();
    // echo $testObj->setUsersStmt(143, "Jazhel", "jazhel@keren.com", "password");
    echo $testObj->setUsersStmt(144, "Jazhel2", "jazhel2@keren.com", "password");
    echo $testObj->getUsersStmt("Jazhel", "jazhel@keren.com");

    ?>
</body>

</html>