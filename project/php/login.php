<?php
$login = $_POST['login'];
$password = $_POST['password'];


$db_host = "localhost";
$db_username = "KAYYER";
$db_password = "1368";
$db_name = "database";

$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);



$sql = "SELECT * from Пользователи WHERE Логин='$login' AND Пароль='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    echo("Вы успешно вошли");
}
if (mysqli_num_rows($result) == 0) {
    echo "Неверный логин/пароль";
}
mysqli_close($conn);
return("success")
?>