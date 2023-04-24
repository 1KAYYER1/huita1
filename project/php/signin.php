<?php
// Подключаемся к базе данных
$db_host = "localhost";
$db_username = "KAYYER";
$db_password = "1368";
$db_name = "database";

// Получаем данные из формы
$login = $_POST["login"];
$email = $_POST["email"];
$password = $_POST["password"];
$name = $_POST["name"];
$surname = $_POST["surname"];
$patronimic = $_POST["patronimic"];
$number = $_POST["number"];
$date =  date("Y-m-d H:i:s");


$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

$sql = "SELECT * FROM Пользователи WHERE Логин = '$login' OR mail = '$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    echo("Соси");
}

if (mysqli_num_rows($result) == 0) {
    $sql = "INSERT INTO Пользователи (Логин, mail, Пароль, Дата_регистрации ) VALUES ($login, $email, $password, $date)";
    $sql = "INSERT INTO Клиенты (Имя, Фамилия, Отчество, Номер_телефона, Дата_регистрации, ID_пользователя) VALUES ($name, $surname, $patronimic, $number, SELECT MAX(user_id) FROM Пользователи)";
    echo("Зареган лох");
}



exit();
?>