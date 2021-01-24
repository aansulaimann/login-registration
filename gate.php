<?php session_start(); require 'functions.php';
    // if(!isset($_SESSION['login'])) {
    //     header("Location: gate.php");
    // }
    if(isset($_POST['login'])) {
        login($_POST);
        exit;
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
                                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="pass" class="form-label">Password</label>
                                <input type="password" class="form-control" id="pass" name="pass" placeholder="name@example.com">
                            </div>
                            <button type="submit" class="me-2 btn btn-primary shadow mt-4" name="login">Log in</button>
                            <button type="button" class="me-2 btn btn-outline-light text-body shadow mt-4">Registration</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>    
</body>
</html>