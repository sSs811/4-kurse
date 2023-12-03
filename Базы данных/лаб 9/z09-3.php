<!DOCTYPE html>
<html>
<head>
    <title>Вывод записей таблицы</title>
</head>
<body>
    <h2>Записи таблицы</h2>

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


    $sql_select = "SELECT * FROM notebook_br$brNN";
    $result = $conn->query($sql_select);

    if ($result->num_rows > 0) {

        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Имя</th>
                    <th>E-mail</th>
                    <th>Адрес</th>
                    <th>Город</th>
                    <th>Дата рождения</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["mail"] . "</td>
                    <td>" . $row["address"] . "</td>
                    <td>" . $row["city"] . "</td>
                    <td>" . $row["birthday"] . "</td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "<p>В таблице нет записей.</p>";
    }


    $conn->close();
    ?>
</body>
</html>