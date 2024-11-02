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

            <a href="index.html">Главная</a>
            <a href="shop.php">Магазин</a>
            <a href="login.html">Авторизация</a>
        </nav>
    </header>

    <main>
    <?php
include 'bd_conection.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE u_name = '$username'";
$result = mysqli_query($mysql, $query);

if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    echo $password."  ".$user['u_password'];
    if ($password == $user['u_password']) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['u_name'];
        header("Location: shop.php");
    } else {
        echo "Неверный пароль.";
    }
} else {
    echo "Пользователь не найден.";
}
?>

        
    </main>


    <footer>
        <p>Контакты: +7 (123) 456-78-90 | email@example.com</p>
        <p>© 2023 Магазин Аксессуаров для Часов</p>
    </footer>
</body>
</html>