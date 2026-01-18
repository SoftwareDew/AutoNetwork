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
        <button type="submit">Търси</button>
    </form>
    <div class="service-categories">
        <button type="All">Всички</button>
        <button type="engine">двигател</button>
        <button type="suspension">окачване</button>
        <button type="tuning">тунинг</button>
        <button type="paint">боя</button>
    </div>
</div>


<div class="services">
    <div class="card">
        <img src="../assets/images/Serviz1.jpg" alt="">
        <h3>Автосервиз Корект</h3>
        <h5>Ст. Загора</h5>
        <p>Lorem ipsum dolor sit amet.</p>
    </div>
    <div class="card">
        <img src="../assets/images/Serviz2.jpg" alt="">
        <h3>Рич ауто</h3>
        <h5>с.Богомилово</h5>
        <p>Lorem ipsum dolor sit amet.</p>
    </div>
    <div class="card">
        <img src="../assets/images/Serviz3.jpg" alt="">
        <h3>Hi Auto</h3>
        <h5>Ст. Загора</h5>
        <p>Lorem ipsum dolor sit amet.</p>
    </div>

    <div class="card">
        <img src="../assets/images/Serviz4.jpg" alt="">
        <h3>BMW Сервиз</h3>
        <h5>Ст. Загора</h5>
        <p>Lorem ipsum dolor sit amet.</p>
    </div>
    <div class="card">
        <img src="../assets/images/Serviz1.jpg" alt="">
        <h3>Ауди Сервиз</h3>
        <h5>Ст. Загора</h5>
        <p>Lorem ipsum dolor sit amet.</p>
    </div>
    <div class="card">
        <img src="../assets/images/Serviz3.jpg" alt="">
        <h3>Мерцедес Сервиз</h3>
        <h5>Ст. Загора</h5>
        <p>Lorem ipsum dolor sit amet.</p>
    </div>

    <div class="card">
        <img src="../assets/images/Serviz2.jpg" alt="">
        <h3>Мирафиори</h3>
        <h5>София</h5>
        <p>Lorem ipsum dolor sit amet.</p>
    </div>
    <div class="card">
        <img src="../assets/images/Serviz4.jpg" alt="">
        <h3>Шонди Гараж</h3>
        <h5>София</h5>
        <p>Lorem ipsum dolor sit amet.</p>
    </div>
    <div class="card">
        <img src="../assets/images/Serviz3.jpg" alt="">
        <h3>Кошмара</h3>
        <h5>Ст. Загора</h5>
        <p>Lorem ipsum dolor sit amet.</p>
    </div>
    
</div>


<?php
include("../templates/footer.php");
?>