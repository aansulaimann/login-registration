<?php session_start(); require 'functions.php';
    if(!isset($_SESSION['login'])) {
        header("Location: gate.php");
        exit;
    }

    if(isset($_POST['logout'])) {
        logout();
        // header("Location: gate.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <form action="" method="post">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Home Page</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active me-3" aria-current="page" href="#">Home</a>
                    <a class="nav-link me-3" href="#">Features</a>
                    <a class="nav-link me-3" href="#">Pricing</a>
                    <button type="submit" class="nav-link btn btn-primary px-4 text-white" name="logout">Logout</a>
                </div>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="card p-5 mt-5 bg-light">
                <div class="card-body">
                    <h3>HOME PAGE</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia quis quas impedit cupiditate magnam id pariatur voluptatum, corporis deserunt assumenda.</p>
                    <button type="button" class="btn btn-primary shadow">Button</button>
                </div>
            </div>
        </div>
        <!-- <button type="submit" name="logout">Logout</button> -->
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>