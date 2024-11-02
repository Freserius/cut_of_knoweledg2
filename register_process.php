<?php
include 'bd_conection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO user (u_name, u_password) VALUES ('$username', '$password')";
if (mysqli_query($mysql, $query)) {
    header("Location: login.html");
} else {
    echo "Ошибка регистрации: " . mysqli_error($mysql);
}
mysqli_close($mysql);
?>
