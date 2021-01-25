<?php session_start(); require 'functions.php';
    if(isset($_SESSION["login"])) {
        header("Location: http://localhost/simple-login/");
        exit;
    }

    if(isset($_POST['btn_login'])) {
        if(login($_POST) > 0) {
            $_SESSION['login'] = true;
            header('Location: home.php');
            exit;
        } else {
            echo 'username / password salah';
            exit;
        }
    }

    if(isset($_POST['reg'])) {
        if(reg($_POST) > 0) {
            echo $err = '<div class="alert alert-primary" role="alert">
                        Success Sign Up.
                    </div>';
        } else {
            echo $err = '<div class="alert alert-danger" role="alert">
                        Invalid Sign Up.
                    </div>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    
    <main>
        <section>
            <div class="container p-3">
                <div class="row mt-5">
                    <div class="col border border-secondary p-3 rounded shadow">
                        <form action="" method="post">
                        <h4 class="text-primary">Login Page</h4>
                        <p class="text-primary">If you administrator please Login</p>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="pass" class="form-label">Password</label>
                                <input type="password" class="form-control" id="pass" name="pass">
                            </div>
                            <button type="submit" class="me-2 btn btn-primary shadow mt-4" name="btn_login">Sign in</button>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-light text-body ms-2 mt-4 shadow" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Sign up
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Modal -->
    <form action="" method="post">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="john" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1" name="pass">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Confitm Password</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1" name="confirmPass">
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="reg">Create account</button>
                </div>
                </div>
            </div>
        </div>
    </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>    
</body>
</html>