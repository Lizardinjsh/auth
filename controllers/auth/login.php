<?php

require "Validator.php";
require "Database.php";
$config = require("config.php");
$db = new Database($config);

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = new Database($config);

    $errors = [];

    if (Validator::email($_POST)) {
        $errors["email"] = "Invalid email format";
    }

    if(empty($errors)){
        $query = "SELECT * FROM users WHERE email = :email AND password = :password";
        $params = [
            "email" => $_POST["email"],
            ":password" => $_POST["password"]
        ];
    }
}
$title = "Login";
require "views/auth/login.view.php";
