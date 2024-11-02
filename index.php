<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Магазин аксессуаров для часов</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <div class="logo">Магазин Аксессуаров</div>
        <nav>
            <img style ="width: 300px" src="image\logo.png" alt="logo">
            <a href="index.php">Главная</a>
            <a href="shop.php?authorize="<?php if(isset($authorize))echo $authorize?>>Магазин</a>
            <a href="login.html">Авторизация</a>
        </nav>
    </header>

    <main>
        <h1>Добро пожаловать в наш магазин аксессуаров для часов!</h1>
        <div class="carousel">
            <div class="slide" style="background-image: url('image/slide1.jpeg');">Наш магазин честен с покупателями!</div>
            <div class="slide" style="background-image: url('image/slide2.jpeg');">Наш мазазин быстр в доставке!</div>
            <div class="slide" style="background-image: url('image/slide3.jpeg');">Наш магазин отечественный!</div>
        </div>
    </main>
    <script src="scripts.js"></script>


    <footer>
        <p>Контакты: +7 (123) 456-78-90 | email@example.com</p>
        <p>© 2023 Магазин Аксессуаров для Часов</p>
    </footer>
</body>
</html>