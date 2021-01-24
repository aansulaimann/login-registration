<?php

function login($data) {
    $email = htmlspecialchars(trim($data['email']));
    $password = htmlspecialchars(trim($data['pass']));

    if($email == "admin@apk.id" && $password == "admin123") {
        $_SESSION["login"] = true;

        header("Location: home.php");
        exit;
    }
}