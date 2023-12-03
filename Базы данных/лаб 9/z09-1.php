<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}


$brNN = "06"; 

$sql_drop = "DROP TABLE IF EXISTS notebook_br$brNN";
if ($conn->query($sql_drop) === TRUE) {
    echo "Таблица удалена успешно.\n";
} else {
    echo "Ошибка при удалении таблицы: " . $conn->error;
}


$sql_create = "CREATE TABLE notebook_br$brNN (
    id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    city VARCHAR(50) NOT NULL,
    address VARCHAR(50) NOT NULL,
    birthday DATE,
    mail VARCHAR(20),
    PRIMARY KEY (id)
    )";


if ($conn->query($sql_create) === TRUE) {
    echo "Таблица создана успешно.\n";
} else {
    echo "Нельзя создать таблицу notebook_br$brNN: " . $conn->error;
}


$conn->close();

?>