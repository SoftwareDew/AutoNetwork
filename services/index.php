<?php
    $title = "Services";
    $page_css = "services.css";
include("../templates/header.php");
?>

<div class="top_section">
    <h1>Автосервизи в България</h1>
    <p>Открийте верифицирани сервизи с реални отзиви от клиенти.</p>
    <form class="search-bar">
        <input type="text" placeholder="Търси...">
        <input type="text" placeholder="Град">
        <button class="btn-service" type="submit">Търси</button>
    </form>
    <div class="service-categories">
        <button class="btn-service" type="All">Всички</button>
        <button class="btn-service" type="engine">двигател</button>
        <button class="btn-service" type="suspension">окачване</button>
        <button class="btn-service" type="tuning">тунинг</button>
        <button class="btn-service" type="paint">боя</button>
    </div>
</div>


<div class="services">
    <div class="card">
        <img src="../assets/images/Serviz1.jpg" alt="">
        <div class="content">
            <h3>Автосервиз Корект</h3>
            <h5>Ст. Загора</h5>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
    <div class="card">
        <img src="../assets/images/Serviz2.jpg" alt="">
        <div class="content">
            <h3>Рич ауто</h3>
            <h5>с.Богомилово</h5>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
    <div class="card">
        <img src="../assets/images/Serviz3.jpg" alt="">
        <div class="content">
            <h3>Hi Auto</h3>
            <h5>Ст. Загора</h5>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
    </div>


    <div class="card">
        <img src="../assets/images/Serviz4.jpg" alt="">
        <div class="content">
            <h3>BMW Сервиз</h3>
            <h5>Ст. Загора</h5>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
    <div class="card">
        <img src="../assets/images/Serviz1.jpg" alt="">
        <div class="content">
            <h3>Ауди Сервиз</h3>
            <h5>Ст. Загора</h5>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
    <div class="card">
        <img src="../assets/images/Serviz3.jpg" alt="">
        <div class="content">
            <h3>Мерцедес Сервиз</h3>
            <h5>Ст. Загора</h5>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
    </div>

    <div class="card">
        <img src="../assets/images/Serviz2.jpg" alt="">
        <div class="content">
            <h3>Мирафиори</h3>
            <h5>София</h5>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
    <div class="card">
        <img src="../assets/images/Serviz4.jpg" alt="">
        <div class="content">
            <h3>Мирафиори</h3>
            <h5>София</h5>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
    <div class="card">
        <img src="../assets/images/Serviz3.jpg" alt="">
        <div class="content">
            <h3>Кошмара</h3>
            <h5>Ст. Загора</h5>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
    
</div>

<div class="bottom-nav">
    <button class="btn-service">Зареди още</button>
</div>


<?php
include("../templates/footer.php");
?>