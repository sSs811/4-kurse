<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отображение столбца</title>
</head>
<body>
    <?php
    // Проверка, был ли выбран столбец
    if (isset($_POST['column'])) {
        $column = $_POST['column'];

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

        // Запрос для получения данных выбранного столбца
        $result = $conn->query("SELECT $column FROM Districts");

        // Вывод данных
        echo "<h2>Содержимое столбца '$column'</h2>";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . $row[$column] . "</li>";
        }
        echo "</ul>";

        // Закрытие соединения
        $conn->close();
    } else {
        echo "<p>Выберите столбец выше.</p>";
    }
    ?>
</body>
</html>