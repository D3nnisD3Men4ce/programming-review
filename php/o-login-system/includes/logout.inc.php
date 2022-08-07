<?php


session_unset();
session_destroy();

// Going back to front page
header("location: ../index.php?erron=none");