<?php

function login($data) {
    $email = htmlspecialchars(trim($data['email']));
    $password = htmlspecialchars(trim($data['pass']));

    if($email == "admin@apk.id" && $password == "admin123") {
        return TRUE;
    }
}

function logout() {
    session_unset();
    $_SESSION = [];
    session_unset();
    session_destroy();

    header("Location: http://localhost/simple-login/gate.php");
    exit;
}