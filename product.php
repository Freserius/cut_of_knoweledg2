<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Детали товара</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <div class="logo">Магазин Аксессуаров</div>
        <nav>
        <img style ="width: 300px" src="image\logo.png" alt="logo">
            <a style = "text-decoration: none" href="index.php">Главная</a>
            <a style = "text-decoration: none" href="shop.php">Магазин</a>
            <a style = "text-decoration: none" href="login.html">Авторизация</a>
        </nav>
    </header>

    <main>
        <?php
        // Получаем информацию о продукте по ID
        include 'bd_conection.php';
        $id = $_GET['id'];
        $query = "SELECT * FROM product WHERE `id` = $id";
        $result = mysqli_query($mysql, $query);
        $product = mysqli_fetch_assoc($result);
        ?>
        <h1><?php echo $product['name']; ?></h1>
        <div class="product-details">
            <img src="<?php echo $product['image_path']; ?>" alt="<?php echo $product['name']; ?>">
            <p><?php echo $product['description']; ?></p>
            <p>Цена: <?php echo $product['price']; ?> $</p>
            <p>В наличии: <?php echo $product['stock']; ?> шт.</p>
        </div>
    </main>

    <footer>
        <p>Контакты: +7 (123) 456-78-90 | email@example.com</p>
        <p>© 2023 Магазин Аксессуаров для Часов</p>
    </footer>
</body>
</html>