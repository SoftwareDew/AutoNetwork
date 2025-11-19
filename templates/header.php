<?php
session_start();
if(!isset($_SESSION["user"])){
    // better is to use absolute path"Location: /login/login.php" because it doesnt matter where i am in file directory is better than relative path(относителен) "Location: ../../login/login.php"
    header("Location: ../login/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
    <nav class=" d-flex navbar navbar-expand-lg bg-primary-subtle text-primary-emphasis px-4">
            <div class="collapse navbar-collapse d-flex justify-content-between" id="">
                <div class="navbar-nav">
                    <a class="nav-link active" href="../blog/index.php">Blog</a>
                    <a class="nav-link active" href="../warehouse/index.php">Warehouse</a>
                    <a class="nav-link active" href="../map/index.php">Map</a>
                    <!-- <a class="nav-link disabled" aria-disabled="true">Disabled</a> -->
                </div>
                <div class="right-nav">
                    <a class="btn btn-info" href="../login/logout.php">Logout</a>
                </div>
            </div>
        </nav>
