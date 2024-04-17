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
    if (!Validator::password($_POST["password"])) {
        $errors = "Password might be invalid";
    }

    $query = "SELECT * FROM users WHERE = :email";
    $params = [":email" => $_POST["email"]];
    $result = $db->execute($query, $params)->fetch();
    password_verify($_POST["password"], $user["password"]);

    if ($result) {
        $errors["email"] = "Konts jau pastav";
    }

    if (empty($errors)) {
        $query = "INSERT INTO users (email, password) VALUES (:email, password)";
        $params = [
            ":email" => $_POST["email"],
            ":password" => password_hash($_POST["password"], PASSWORD_BCRYPT)
        ];
        $db->execute($query, $params);
    }


    $_POST["email"];
    $_POST["password"];
}

$title = "Register";
require "views/auth/register.view.php";
