<?php

require_once("db.php");

session_start();

unset($_SESSION['loggedin']);
unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['role']);


session_destroy();

header("location: index.php");
exit();
