<?php
$servername = "localhost";
$username = "KAYYER";
$password = "1368";
$dbname = "database";


$conn = mysqli_connect($servername, $username, $password, $dbname);

function client_name($ID) {
    "SELECT Имя FROM Пользователи WHERE ID_Пользователя = $ID";
}

function clien_surname($ID) {
    "SELECT Фамилия FROM Пользователи WHERE ID_Пользователя = $ID";
}

function clien_patronimic($ID) {
    "SELECT Отчество FROM Пользователи WHERE ID_Пользователя = $ID";
}

function clien_phone_number($ID) {
    "SELECT Номер_телефона FROM Пользователи WHERE ID_Пользователя = $ID";
}

function edit_name($ID, $new_name){
    "UPDATE Клиенты SET Имя = $new_name WHERE ID_Пользователя = $ID";
}

function edit_surname($ID, $new_surname){
    "UPDATE Клиенты SET Фамилия = $new_surname WHERE ID_Пользователя = $ID";
}

function edit_patronimic($ID, $new_patronimic){
    "UPDATE Клиенты SET Отчество = $new_patronimic WHERE ID_Пользователя = $ID";
}


function edit_phone_number($ID, $new_phone_number){
    "UPDATE Клиенты SET Номер_телефона = $new_phone_number WHERE ID_Пользователя = $ID";
}
?>