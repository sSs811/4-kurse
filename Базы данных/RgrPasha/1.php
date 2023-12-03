<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";

// Создаем соединение
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем соединение
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Создаем таблицу
$sql_create = "CREATE TABLE IF NOT EXISTS Districts (
    Number INT PRIMARY KEY,
    DistrictName VARCHAR(50) NOT NULL,
    RegionName VARCHAR(50) NOT NULL,
    Capital VARCHAR(50) NOT NULL
)";

if ($conn->query($sql_create) === TRUE) {
    echo "Table 'Districts' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Вставляем данные
$sql_insert = "INSERT INTO Districts (Number, DistrictName, RegionName, Capital)
VALUES
(1, 'Север', 'Новосибирский', 'Новосибирск'),
(2, 'Север', 'Красноярский', 'Красноярск'),
(3, 'Север', 'Иркутский', 'Иркутск'),
(4, 'Юг', 'Краснодарский', 'Краснодар'),
(5, 'Юг', 'Волгоградский', 'Волгоград'),
(6, 'Юг', 'Астраханский', 'Астрахань'),
(7, 'Запад', 'Московский', 'Москва'),
(8, 'Запад', 'Псковский', 'Псков'),
(9, 'Запад', 'Ивановский', 'Иваново'),
(10, 'Восток', 'Владивостокский', 'Владивосток'),
(11, 'Восток', 'Мурманский', 'Мурманск'),
(12, 'Восток', 'Хабаровский', 'Хабаровск')";

if ($conn->query($sql_insert) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $conn->error;
}

// Закрываем соединение
$conn->close();

?>