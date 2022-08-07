<?php


if (isset($_POST["submit"])) {

    // Grabbing data
    $uid        = $_POST["uid"];
    $pwd        = $_POST["pwd"];


    // Instantiate Signup Controller Class (the order matters)
    include "../classes/dbh.classes.php";
    include "../classes/loginModel.classes.php";
    include "../classes/loginController.classes.php";

    $signup = new LoginController($uid, $pwd);


    // Running error handlers and user signup
    $signup->loginUser();


    // Going back to front page
    header("location: ../index.php?error=none");
}