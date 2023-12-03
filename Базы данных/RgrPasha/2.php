<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Выбор столбца</title>
</head>
<body>
    <form action="3.php" method="post">
        <p>Выберите столбец для отображения:</p>

        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Проверка соединения
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Запрос для получения имен столбцов таблицы
        $table = "Districts";
        $result = $conn->query("SHOW COLUMNS FROM $table");

        // Создание радиокнопок на основе имен столбцов
        while ($row = $result->fetch_assoc()) {
            $columnName = $row['Field'];
            echo "<label><input type='radio' name='column' value='$columnName'>$columnName</label><br>";
        }

        // Закрытие соединения
        $conn->close();
        ?>

        <br>
        <input type="submit" value="Показать столбец">
    </form>
</body>
</html>