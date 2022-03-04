<?php
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $idNumber = $_POST["id-number"];
}

include "../classes/DBHandler.php";
include "../classes/Register.php";
include "../classes/RegisterController.php";
$register = new RegisterController($name, $surname, $idNumber);

$register->registerUser();

header("location: ../index.php?error=none");
