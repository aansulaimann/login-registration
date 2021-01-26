<?php

$conn = mysqli_connect("localhost", "root", "", "simplelogin");


function login($data) {
    global $conn;

    $email = htmlspecialchars(trim($data['email']));
    $password = htmlspecialchars(trim($data['pass']));

    $query = "SELECT email, password FROM user WHERE email = '$email'";
    $res = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($res) === 1) {
        $fetch = mysqli_fetch_assoc($res);
        if(password_verify($password, $fetch['password'])) {
            return 1;
        }

        // $q = "SELECT username, email, password FROM user WHERE email = '$email' and password = ";
        // var_dump($q); die;
        // mysqli_query($conn, $q);
        // return mysqli_affected_rows($conn);

    } else {
        return false;
    }



    // if(mysqli_num_rows($res) === 1) {
    //     $fetch = mysqli_fetch_assoc($res);
    //     if(password_verify($password, $fetch['password'])) {
    //         // return true;
    //         // return mysqli_affected_rows($conn);
    //     }
    // }
    // exit;
    // return mysqli_affected_rows($conn);
}

function logout() {
    session_unset();
    $_SESSION = [];
    session_unset();
    session_destroy();

    header("Location: http://localhost/simple-login/gate.php");
    exit;
}

function reg($data) {
    global $conn;

    $username = mysqli_real_escape_string($conn, htmlspecialchars(trim($data['username'])));
    $email = mysqli_real_escape_string($conn, htmlspecialchars(trim($data['email'])));
    $pass = mysqli_real_escape_string($conn, htmlspecialchars(trim($data['pass'])));
    $pass2 = mysqli_real_escape_string($conn, htmlspecialchars(trim($data['confirmPass'])));

    $res = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if(mysqli_fetch_assoc($res)) {
        echo "<script> 
                alert('Username sudah ada!');
            </script>";
        return false;
    }

    if($pass !== $pass2) {
        echo "<script> 
                alert('Password tidak sesuai!');
            </script>";
        return false;
    }

    $pass = password_hash($pass, PASSWORD_DEFAULT);
   
    $query = "INSERT INTO user (Id, username, email, password) VALUES('', '$username', '$email', '$pass')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}