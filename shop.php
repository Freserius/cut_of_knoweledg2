<?php
session_start();
$authorize = isset($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Наш Магазин</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <div class="logo">Магазин Аксессуаров</div>
        <nav>
            <img style="width: 300px" src="image/logo.png" alt="logo">
            <a href="index.php">Главная</a>
            <a href="shop.php">Магазин</a>
            <?php if ($authorize): ?>
                <a href="logout.php">Выйти (<?php echo $_SESSION['username']; ?>)</a>
            <?php else: ?>
                <a href="login.html">Авторизация</a>
            <?php endif; ?>
        </nav>
    </header>

    <main style="padding-botton= 400px;">
        <h1>Каталог товаров</h1>
        <div class="product-grid">
            <table>
            <?php
            include 'bd_conection.php';
            $query = "SELECT * FROM product";
            $result = mysqli_query($mysql, $query);
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><img title="<?php echo $row['name']; ?>" style="width: 300px" src="<?php echo $row['image_path']; ?>" /></td>
                    <td><?php echo "<a href='product.php?id=" . $row['id'] . "'>" . $row['description'] . "</a>"; ?></td>
                    <td><?php echo $row['price'] . "$" ?></td>
                    <td><?php echo $row['stock'] ?></td>
                    <td>
                        <?php if ($authorize): ?>
                            <button onclick="addToCart('<?php echo $row['name']; ?>', '<?php echo $row['price']; ?>')">Добавить в список покупок</button>
                            <?php else: ?>
                            <p>Авторизуйтесь для покупки</p>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php } ?>
            </table>
        </div>
        <h2>Список покупок</h2>
        <ul id="cart-list"></ul>
    </main>

    <footer>
        <p>Контакты: +7 (123) 456-78-90 | email@example.com</p>
        <p>© 2023 Магазин Аксессуаров для Часов</p>
    </footer>

    <script src="scripts.js"></script>
</body>
</html>
