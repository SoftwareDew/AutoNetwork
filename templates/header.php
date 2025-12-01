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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Dashboard</title>
</head>
<body>
<!-- <div class="collapse navbar-collapse d-flex justify-content-between" id=""></div>
</div> -->

<nav class="d-flex navbar navbar-expand-lg bg-secondary text-primary-emphasis px-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><h1><strong>AutoNetwork</strong></h1></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">button</span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../blog/index.php">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../warehouse/index.php">Warehouse</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../map/index.php">Maps</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">News</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Community
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Forum</a></li>
                <li><a class="dropdown-item" href="#">Classifieds</a></li>
                <li><a class="dropdown-item" href="#">Usefull links</a></li>
            </ul>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Account
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item bg-primary" href="../login/logout.php">Logout</a></li>
                <!-- <i class="fa-solid fa-user"><a href="../login/logout.php"></a></i> -->
                <li><a class="dropdown-item" href="#">Usefull links</a></li>
            </ul>
            </li>
        </ul>
        </div>
    </div>
</nav>

            
        
