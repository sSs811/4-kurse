<!DOCTYPE html><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Выбор столбца</title>
</head>
<body>
    <form action="3L.php" method="post">
        <p>Выберите столбец для отображения:</p>

        <?php
        // Подключение к базе данных
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
        $table = "OperatingSystems";
        $result = $conn->query("SHOW COLUMNS FROM $table");

        // Создание выпадающего списка на основе имен столбцов
        echo "<select name='column'>";
        while ($row = $result->fetch_assoc()) {
            $columnName = $row['Field'];
            echo "<option value='$columnName'>$columnName</option>";
        }
        echo "</select>";

        // Закрытие соединения
        $conn->close();
        ?>

        <br>
        <input type="submit" value="Показать столбец">
    </form>
</body>
</html>