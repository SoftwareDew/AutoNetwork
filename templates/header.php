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

    <title><?= $title ?? 'My Website' ?></title>

    <!-- 1️⃣ Bootstrap CSS FIRST -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        crossorigin="anonymous"
    >

    <!-- 2️⃣ Global CSS -->
    <link rel="stylesheet" href="../assets/css/main.css">

    <!-- 3️⃣ Page specific CSS (LAST = strongest) -->
    <?php if (!empty($page_css)): ?>
        <link rel="stylesheet" href="../assets/css/<?= $page_css ?>">
    <?php endif; ?>
</head>
<body>
<!-- <div class="collapse navbar-collapse d-flex justify-content-between" id=""></div>
</div> -->

<nav class="d-flex navbar navbar-expand-lg bg-dark text-primary-emphasis px-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="../home/index.php"><h1><strong>AutoNetwork</strong></h1></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">button</span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link text-light" href="../home/index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="../blog/index.php">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="../warehouse/index.php">Warehouse</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="../map/index.php">Maps</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light active" aria-current="page" href="#">News</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Account
            </a>
            <ul class="dropdown-menu bg-dark text-light">
                <li><a class="dropdown-item text-light" href="#">Profile</a></li>
                <li><a class="dropdown-item text-light bg-primary" href="../login/logout.php">Logout</a></li>
                <!-- <i class="fa-solid fa-user"><a href="../login/logout.php"></a></i> -->
                <li><a class="dropdown-item text-light" href="#">Usefull links</a></li>
            </ul>
            </li>
        </ul>
        </div>
    </div>
</nav>


            
        
