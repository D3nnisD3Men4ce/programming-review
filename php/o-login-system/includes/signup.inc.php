<?php

if (isset($_POST["submit"])) {

    // Grabbing data
    $uid        = $_POST["uid"];
    $pwd        = $_POST["pwd"];
    $pwdConfirm = $_POST["pwdConfirm"];
    $email      = $_POST["email"];

    // Instantiate Signup Controller Class (the order matters)
    include "../classes/dbh.classes.php";
    include "../classes/signupModel.classes.php";
    include "../classes/signupController.classes.php";

    $signup = new SignupController($uid, $pwd, $pwdConfirm, $email);


    // Running error handlers and user signup
    $signup->signupUser();


    // Going back to front page
    header("location: ../index.php?error=none");
}