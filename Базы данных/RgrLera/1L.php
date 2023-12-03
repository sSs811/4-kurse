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
$sql_create = "CREATE TABLE IF NOT EXISTS OperatingSystems (
    Number INT PRIMARY KEY,
    OSName VARCHAR(50) NOT NULL,
    OSType VARCHAR(50) NOT NULL,
    DeveloperFirm VARCHAR(50) NOT NULL
)";

if ($conn->query($sql_create) === TRUE) {
    echo "Table 'OperatingSystems' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Вставляем данные
$sql_insert = "INSERT INTO OperatingSystems (Number, OSName, OSType, DeveloperFirm) VALUES
(1, 'Win95', 'Win', 'Microsoft'),
(2, 'Win98', 'Win', 'Microsoft'),
(3, 'WinNT', 'Win', 'UnixF'),
(4, 'WinXP', 'Win', 'Apple'),
(5, 'Unix', 'Unix', 'UnixF'),
(6, 'FreeBSD', 'Unix', 'Jobbs'),
(7, 'Linux', 'Unix', 'UnixF'),
(8, 'MacOS1', 'Mac', 'Apple'),
(9, 'MacOS2', 'Mac', 'Apple'),
(10, 'MacOS3', 'Mac', 'Jobbs')";

if ($conn->query($sql_insert) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $conn->error;
}

// Закрываем соединение
$conn->close();

?>
